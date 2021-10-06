<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name'=>'Admin', 'email'=>'admin@gmail.com', 'password'=>'$2y$10$EXdJJlzJiD7k9Xfl3KAu9Oer7GEc4amUufH4wxxKwmc85Nz1w5V4m', 'created_at' => date("Y-m-d H:i:s")],
        ]);
    }
}
