<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Traits\ApiResponse;
use App\Utils\AppConstant;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    use ApiResponse;

    protected $order, $orderDetail, $cart;

    /**
     * @param Order $order
     * @param OrderDetail $orderDetail
     * 
     * @return mixed
     */
    public function __construct(Order $order, OrderDetail $orderDetail, Cart $cart)
    {
        $this->order = $order;
        $this->orderDetail = $orderDetail;
        $this->cart = $cart;
    }

    /**
     * @return JsonResponse
     */
    public function index(Request $request)
    {
        $orders = $this->order->with('order_detail')->where('email', $request->user->email)->get();
        $this->setMeta('status', AppConstant::STATUS_OK);
        $this->setMeta('message', __('message.order_fetch_success'));
        $this->setData('orders', $orders);
        return response()->json($this->setResponse(), AppConstant::OK);
    }

    /**
     * @param OrderRequest $request
     * 
     * @return JsonResponse
     */
    public function store(OrderRequest $request)
    {
        try {
            $request->validate;
            
            DB::beginTransaction();

            $order = $this->order;
            $order->name = $request->name;
            $order->email = $request->email;
            $order->contact_no = $request->contact_no;
            $order->address = $request->address;
            $order->currency = $request->currency;
            $order->delivery_charges = AppConstant::DELIVERY_CHARGE;
            $order->save();
            
            $cart = $this->cart->with('pizza_detail')->where('uuid', $request->cart_uuid)->get();
            $items = 0;
            $total = 0;
            foreach ($cart as $value) {
                $price = $request->currency === AppConstant::DOLLAR ? $value->pizza_detail->dollar : $value->pizza_detail->euro;
                $orderDetail = $this->orderDetail;
                $orderDetail->order_id = $order->id;
                $orderDetail->pizza_price_id = $value->pizza_price_id;
                $orderDetail->quantity = $value->quantity;
                $orderDetail->price = $price;
                $orderDetail->save();

                $items += $value->quantity;
                $total += $value->quantity * $price;
            }

            $order->total_items = $items;
            $order->total_price = $total;
            $order->save();

            $this->cart->where('uuid', $request->cart_uuid)->delete();

            $orders = $this->order->with('order_detail')->where('email', $request->email)->get();

            DB::commit();
            $this->setMeta('status', AppConstant::STATUS_OK);
            $this->setMeta('message', __('message.order_place_success'));
            $this->setData('orders', $orders);
            return response()->json($this->setResponse(), AppConstant::OK);
        } catch (\Exception $e) {
            DB::rollBack();
            $this->setMeta('status', AppConstant::STATUS_FAIL);
            $this->setMeta('message',  $e->getMessage());
            return response()->json($this->setResponse(), AppConstant::INTERNAL_SERVER_ERROR);
        }
    }
}
