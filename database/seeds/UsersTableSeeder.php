<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [
                'name' => 'Unknown Author',
                'email' => 'unkauthor@g.com',
                'avatar' => '',
                'password' => bcrypt(Str::random(16))
            ],
            [
                'name' => 'Famous Author',
                'email' => 'famauthor@g.com',
                'avatar' => 'avatar',
                'password' => bcrypt('12345678')
            ]
        ];

        DB::table('users')->insert($data);
    }
}
