<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PizzaSize extends Model
{
    protected $table = 'pizza_size';

    protected $hidden = ['pivot', 'created_at', 'updated_at'];
}
