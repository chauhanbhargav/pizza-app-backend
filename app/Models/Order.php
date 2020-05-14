<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Ramsey\Uuid\Uuid;

class Order extends Model
{
    protected $table = 'order';

    protected $hidden = ['pivot', 'created_at', 'updated_at'];

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($query) {
            $query->uuid = Uuid::uuid4();
        });
    }


    public function order_detail(): HasOne
    {
        return $this->hasOne(OrderDetail::class, 'order_id', 'id')
            ->with('pizza_detail');
    }
}
