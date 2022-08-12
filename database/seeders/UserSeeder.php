<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Md. Mahfuj Hasan',
            'email' => 'shohug.mahfuj@gmail.com',
            'password' => bcrypt('123456789'),
        ]);
    }
}
