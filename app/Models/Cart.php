<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Cart extends Model
{
    protected $table = 'cart';

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
