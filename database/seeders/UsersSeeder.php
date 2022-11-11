<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = [
            [
                'id' => '8fa0732a-607e-11ed-9b6a-0242ac120002',
                'firstName' => 'Miguel',
                'secondName' => 'David',
                'surname' => 'Portillo',
                'secondSurname' => 'Padilla',
                'username' => 'admin',
                'email' => 'mipor.278@gmail.com',
                'municipality_id' => '431',
                'photo' => 'https://picsum.photos/200/300',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        $relation = [
            [
                'user_id' => '8fa0732a-607e-11ed-9b6a-0242ac120002',
                'role_id' => 1,
                'password' => bcrypt('admin'),
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('users')->insert($admins);
        DB::table('users_roles_relationship')->insert($relation);


    }
}
