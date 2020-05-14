<?php

use App\Models\Size;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sizes = [
            "Regular", "Medium", "Large"
        ];
        
        foreach ($sizes as $value) {
            $size = new Size();
            $size->name = $value;
            $size->save();
        }
    }
}
