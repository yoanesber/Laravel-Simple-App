<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call(UsersTableSeeder::class);
        Model::reguard();
    }
}

// Create Model File
// =================
// php artisan make:model Rating -m //The -m flag will create the corresponding migration file for the model

// Create Migration File
// =====================
// composer dump-autoload
// php artisan make:migration create_users_table
// php artisan migrate

// Create Seeder File
// ==================
// composer dump-autoload
// php artisan make:seeder UsersTableSeeder
// php artisan db:seed //By default, the db:seed command runs the DatabaseSeeder class, which may be used to call other seed classes
// php artisan db:seed --class=UsersTableSeeder //to specify a specific seeder class to run individually
// php artisan migrate:refresh --seed //This command is useful for completely re-building your database