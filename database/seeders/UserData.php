<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Putri',
                'email' => 'putri@gmail.com',
                'password' => bcrypt('1234'),
                'jabatan' => 'Administrator',
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
