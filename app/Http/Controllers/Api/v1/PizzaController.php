<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\PizzaDetail;
use App\Traits\ApiResponse;
use App\Utils\AppConstant;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    use ApiResponse;

    protected $pizza;

    /**
     * @param PizzaDetail $pizaa
     * 
     * @return mixed
     */
    public function __construct(PizzaDetail $pizza)
    {
        $this->pizza = $pizza;
    }

    public function index()
    {
        $pizzas = $this->pizza->with('pizza_price')->get();
        $this->setMeta('status', AppConstant::STATUS_OK);
        $this->setMeta('message', __('message.pizza_fetch'));
        $this->setData('pizzas', $pizzas);
        return response()->json($this->setResponse(), AppConstant::OK);
    }
}
