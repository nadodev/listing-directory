<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    protected static ?string $password;
    public function run(): void
    {
        User::insert([
            [
                'name' => 'Super Admin',
                'email' => 'nadojba@hotmail.com',
                'password'=> static::$password ??= Hash::make('1234'),
                'user_type' => 'admin',
            ],

            [
                'name' => 'Jhon Doe',
                'email' => 'teste@hotmail.com',
                'password'=> static::$password ??= Hash::make('1234'),
                'user_type' => 'user',
            ],

            
        ]);

    }
}
