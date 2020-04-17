<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'                 => 1,
                'name'               => 'Admin',
                'email'              => 'admin@admin.com',
                'password'           => '$2y$10$Oi3LN4Q2kQlrTJWDoZLk1u07PIMi84TCXUnACSvFXkIF22Pp3k/nW',
                'remember_token'     => null,
                'verified'           => 1,
                'verified_at'        => '2020-02-29 23:57:53',
                'verification_token' => '',
                'author_pen_name'    => '',
            ],
        ];

        User::insert($users);
    }
}
