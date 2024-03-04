<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
        [
            'name'=>'Dosen',
            'email'=>'dosen@gmail.com',
            'role'=>'dosen',
            'password'=>bcrypt('1234'),
        ],
        [
            'name'=>'Mahasiswa',
            'email'=>'mahasiswa@gmail.com',
            'role'=>'mahasiswa',
            'password'=>bcrypt('1234'),
        ],
        [
            'name'=>'BAUK',
            'email'=>'bauk@gmail.com',
            'role'=>'bauk',
            'password'=>bcrypt('1234'),
        ],
        [
            'name'=>'BAAK',
            'email'=>'baak@gmail.com',
            'role'=>'baak',
            'password'=>bcrypt('1234'),
        ],
        [
            'name'=>'Tim Pemelihara',
            'email'=>'tim_pemelihara@gmail.com',
            'role'=>'tim_pemelihara',
            'password'=>bcrypt('1234'),
        ],
    ];

    foreach($userData as $key => $val) {
        User::create($val);
    }
    }

}
