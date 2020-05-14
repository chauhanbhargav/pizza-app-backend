<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PizzaDetail extends Model
{
    protected $table = 'pizza_detail';

    protected $hidden = ['pivot', 'created_at', 'updated_at'];

    /**
     * @return url() ?? null
     */
    public function getImageAttribute()
    {
        $profile = $this->attributes['image'];
        if ($profile != "") {
            return url('storage/' . $profile);
        } else {
            return null;
        }
    }

    /**
     * @return BelongTo
     */
    public function pizza_price(): BelongsTo
    {
        return $this->belongsTo(PizzaPrice::class, 'id', 'pizza_id')
            ->with(['crust', 'size']);
    }
}
