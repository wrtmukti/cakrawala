<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            'name' => 'cakrawalaadminckwyogyakarta',
            'email' => 'cakrawalaadminckwyogyakarta2024@gmail.com',
            'password' => bcrypt('cakrawalaadminckwyogyakarta2024januari'),
        );
        \App\Models\User::insert($data);
    }
}
