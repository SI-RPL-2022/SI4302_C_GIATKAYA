<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Administrator',
                'email' => 'admin@gmail.com',
                'gender' => 'Laki-laki',
                'nomor' => '082217767566',
                'alamat' => 'Jl. Pemuda Pancasila',
                'status' => '1',
                'is_admin' => '1',
                'password' => bcrypt('admin123'),
            ],
            [
                'name' => 'Fajar',
                'email' => 'fajar@gmail.com',
                'gender' => 'Laki-laki',
                'nomor' => '082217767566',
                'alamat' => 'Jl. Pemuda Pancasila',
                'status' => '1',
                'is_admin' => '0',
                'password' => bcrypt('fajar123'),
            ],
            
        ];

        foreach ($user as $key => $value){
            User::create($value);
        }
    }
}
