<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=> 'dat',
            'email'=> 'datnt@ieg.vn',
            'password'=> bcrypt('111111'),
            'role'=> 0,
            'created_at' => new DateTime(),
        ]);
    }
}
