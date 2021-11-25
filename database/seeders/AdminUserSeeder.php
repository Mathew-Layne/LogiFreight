<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'first_nm'=> 'admin',
            'last_nm' => 'admin',
            'email' => 'admin@email.com',
            'password' => Hash::make('password'),
            'trn' => "111-111-111",
            'address' => 'Church Street',
            'city' => 'Kingston',
            'parish' => 'Kingston',
            'phone' => '124-345-4567',
            'mailbox'=> 'LF10001',
            'user_type' => 'Admin',
        ]);
    }
}
