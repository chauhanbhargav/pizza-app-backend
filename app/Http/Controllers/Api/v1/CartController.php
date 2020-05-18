<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\CartRequest;
use App\Models\Cart;
use App\Models\PizzaPrice;
use App\Traits\ApiResponse;
use App\Utils\AppConstant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    use ApiResponse;

    protected $cart, $pizzaPrice;

    public function __construct(Cart $cart, PizzaPrice $pizzaPrice)
    {
        $this->cart       = $cart;
        $this->pizzaPrice = $pizzaPrice;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CartRequest $request)
    {
        try {
            $request->validate;

            DB::beginTransaction();

            $cartPrice = $this->pizzaPrice->where([
                'pizza_id' => $request->pizza_id,
                'size_id' => $request->size_id,
                'crust_id' => $request->crust_id,
            ])->first();

            $cart = $this->cart->where([
                'uuid' => $request->uuid,
                'pizza_price_id' => $cartPrice->id
            ])->first();

            if ($cart) {
                //  Update Item
                $cart->quantity = $cart->quantity + 1;
                $cart->save();
            } else {
                //  Add Item
                $cart = $this->cart;
                $cart->uuid = $request->uuid;
                $cart->pizza_price_id = $cartPrice->id;
                $cart->quantity = 1;
                $cart->save();
            }



            //  Fetch All Cart Details
            $cartDetails = $cart->with('pizza_detail')->where('uuid', $request->uuid)->get();

            DB::commit();
            $this->setMeta('status', AppConstant::STATUS_OK);
            $this->setMeta('message', __('message.add_to_cart_success'));
            $this->setData('cart', $cartDetails);
            return response()->json($this->setResponse(), AppConstant::OK);
        } catch (\Exception $e) {
            DB::rollBack();
            $this->setMeta('status', AppConstant::STATUS_FAIL);
            $this->setMeta('message',  __('message.server_error'));
            return response()->json($this->setResponse(), AppConstant::UNPROCESSABLE_REQUEST);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cart = $this->cart->with('pizza_detail')->where([
            'uuid' => $id
        ])->get();

        $this->setMeta('status', AppConstant::STATUS_OK);
        $this->setMeta('message', __('message.cart_fetch_success'));
        $this->setData('cart', $cart);
        return response()->json($this->setResponse(), AppConstant::OK);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();

            $cart = $this->cart->where([
                'id' => $request->id,
                'uuid' => $id
            ])->first();
            $cart->quantity = $request->quantity;
            $cart->save();

            //  Fetch All Cart Details
            $cartDetails = $cart->with('pizza_detail')->where('uuid', $id)->get();

            DB::commit();
            $this->setMeta('status', AppConstant::STATUS_OK);
            $this->setMeta('message', __('message.cart_updated_success'));
            $this->setData('cart', $cartDetails);
            return response()->json($this->setResponse(), AppConstant::OK);
        } catch (\Exception $e) {
            DB::rollBack();
            $this->setMeta('status', AppConstant::STATUS_FAIL);
            $this->setMeta('message',  __('message.server_error'));
            return response()->json($this->setResponse(), AppConstant::UNPROCESSABLE_REQUEST);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            $cart = $this->cart->where('id', $id)->first();

            //  Delete Item From Cart
            $cart->delete();

            //  Fetch All Cart Details
            $cartDetails = $cart->with('pizza_detail')->where('uuid', $cart->uuid)->get();

            DB::commit();
            $this->setMeta('status', AppConstant::STATUS_OK);
            $this->setMeta('message', __('message.delete_successfully'));
            $this->setData('cart', $cartDetails);
            return response()->json($this->setResponse(), AppConstant::OK);
        } catch (\Exception $e) {
            DB::rollBack();
            $this->setMeta('status', AppConstant::STATUS_FAIL);
            $this->setMeta('message',  __('message.server_error'));
            return response()->json($this->setResponse(), AppConstant::UNPROCESSABLE_REQUEST);
        }
    }
}
