<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $account = [
            'name'     => 'admin',
            'email'    => 'admin@alihgae.com',
            'password' => Hash::make('password'),
        ];

        User::create($account);
    }
}
