<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [[
            'id'             => 1,
            'fname'          => 'Admin',
            'lname'          => 'Admin',
            'email'          => 'admin@admin.com',
            'password'       => '$2y$10$2Zup/OQMmjEQF0I4KGUqbeNC.cHrsGRwafZOqNNpf3jN3ZAHO3FdG',
            'phone'          => '123456789',
            'university'     => 'UOG Sialkot',
            'status'         =>1,
            'remember_token' => null,
            'created_at'     => '2019-08-27 17:17:48',
            'updated_at'     => '2019-08-27 17:17:48',
            'deleted_at'     => null,
        ]];

        User::insert($users);
    }
}
