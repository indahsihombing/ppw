<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
            'name'=> 'Admin',
            'email'=>'admin@del.ac.id',
            'role'=>'admin',
            'password'=>bcrypt('admin'),
            ],

            [
            'name'=> 'Indah Elisa Sihombing',
            'email'=>'iss22041@del.ac.id',
            'role'=>'mahasiswa',
            'password'=>bcrypt('mahasiswa'),
            ],
        ];

        foreach($userData as $key => $val){
            User::create($val);

        }
    }
}
