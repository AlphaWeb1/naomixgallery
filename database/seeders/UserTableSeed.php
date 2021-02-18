<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UserTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'firstname' => 'Naomix',
            'surname' => 'Gallery',
            'email' => 'amajoyeogbe.hofftech@gmail.com',
            'phone' => '08185166459',
            'user_type' => '1',
            'user_role' => '1',
            'is_active' => '1',
            'email_verified_at' => date("Y-m-d H:i:s"),
            'password' => Hash::make('Naomix@Gallery#Ltd1'),
        ]);
    }
}
