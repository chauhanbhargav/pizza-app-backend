<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class OrderDetail extends Model
{
    protected $table = 'order_details';

    protected $hidden = ['pivot', 'created_at', 'updated_at'];

    /**
     * @return HasOne
     */
    public function pizza_detail(): HasOne
    {
        return $this->hasOne(PizzaPrice::class, 'id', 'pizza_price_id')
            ->with(['crust', 'size', 'pizza']);
    }
}
