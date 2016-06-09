<?php

use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Admin::create(['name' => 'admin', 'email' => 'admin@misme.co.id', 'password' => bcrypt('admin')]);
    }
}
