<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PizzaPrice extends Model
{
    protected $table = 'pizza_price';

    protected $hidden = ['pivot', 'created_at', 'updated_at'];

    /**
     * @return HasOne
     */
    public function crust(): HasOne
    {
        return $this->hasOne(PizzaDetail::class, 'id', 'crust_id');
    }

    /**
     * @return HasOne
     */
    public function size(): HasOne
    {
        return $this->hasOne(PizzaDetail::class, 'id', 'size_id');
    }

    /**
     * @return HasOne
     */
    public function pizza(): HasOne
    {
        return $this->hasOne(PizzaDetail::class, 'id', 'pizza_id');
    }
}
