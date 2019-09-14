<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $roles = [[
            'id'         => 1,
            'title'      => 'Admin',
            'created_at' => '2019-08-27 17:17:47',
            'updated_at' => '2019-08-27 17:17:47',
            'deleted_at' => null,
        ],
        [
            'id'         => 2,
            'title'      => 'Customer',
            'created_at' => '2019-08-27 17:17:47',
            'updated_at' => '2019-08-27 17:17:47',
            'deleted_at' => null,
        ],
        [
            'id'         => 3,
            'title'      => 'Writer',
            'created_at' => '2019-08-27 17:17:47',
            'updated_at' => '2019-08-27 17:17:47',
            'deleted_at' => null,
        ],
        [
            'id'         => 4,
            'title'      => 'Editor',
            'created_at' => '2019-08-27 17:17:47',
            'updated_at' => '2019-08-27 17:17:47',
            'deleted_at' => null,
        ]




        ];

        Role::insert($roles);
    }
}
