<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
     * @return HasMany
     */
    public function pizza_price(): HasMany
    {
        return $this->hasMany(PizzaPrice::class, 'pizza_id', 'id')
            ->with(['crust', 'size']);
    }
}
