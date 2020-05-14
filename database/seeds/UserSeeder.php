<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Ramsey\Uuid\Uuid;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            "name" => "Test User",
            "email" => "test@example.com",
            "password" => Hash::make('test@123')
        ];

        $size = new User();
        $size->name = $user['name'];
        $size->email = $user['email'];
        $size->password = $user['password'];
        $size->save();
    }
}
