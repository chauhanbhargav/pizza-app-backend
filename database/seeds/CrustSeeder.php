<?php

use App\Models\Crust;
use Illuminate\Database\Seeder;

class CrustSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            "New Hand Tossed", "Wheat Thin Crust", "Cheese Burst", "Classic Hand Tossed"
        ];
        foreach ($types as $type) {
            $size = new Crust();
            $size->name = $type;
            $size->save();
        }
    }
}
