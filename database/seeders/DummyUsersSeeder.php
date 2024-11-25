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
            'name'=> 'Duktek',
            'email'=>'duktek@del.ac.id',
            'role'=>'duktek',
            'password'=>bcrypt('duktek'),
            ],
            [
            'name'=> 'Maintenance',
            'email'=>'maintenance@del.ac.id',
            'role'=>'maintenance',
            'password'=>bcrypt('main'),
            ],
            [
            'name'=> 'Indah Elisa Sihombing',
            'email'=>'iss22041@del.ac.id',
            'role'=>'user',
            'password'=>bcrypt('22041'),
            ],
            [
            'name'=> 'Chandro Pardede',
            'email'=>'chandro.pardede@del.ac.id',
            'role'=>'user',
            'password'=>bcrypt('dosen'),
                ],

        ];

        foreach($userData as $key => $val){
            User::create($val);

        }
    }
}
