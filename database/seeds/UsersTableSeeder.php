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
        $db = DB::table( 'users' )->insert(
            array (
                array (
                    'name'           => 'Administrator',
                    'email'          => 'admin@email.com',
                    'password'       => bcrypt( 'password' ),
                ),
                array (
                    'name'           => 'Angelo',
                    'email'          => 'confi@email.com',
                    'password'       => bcrypt( 'password' ),
                )
            )
        );
    }
}
