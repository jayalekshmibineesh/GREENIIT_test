<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([

            'name'=>'HR',
            'email'=>'hr@gmail.com',
            'password'=>bcrypt('hrgreeniit'),
            'type'=>'HR',           
          ]);
            
          User::create([

            'name'=>'jaya',
            'email'=>'jaya@gmail.com',
            'password'=>bcrypt('jaya123'),
            'type'=>'employee',           
          ]);
          User::create([

            'name'=>'sethu',
            'email'=>'sethu@gmail.com',
            'password'=>bcrypt('sethu123'),
            'type'=>'employee',           
          ]);
          User::create([

            'name'=>'Ram',
            'email'=>'ram@gmail.com',
            'password'=>bcrypt('ram123'),
            'type'=>'employee',           
          ]);
          User::create([

            'name'=>'Sam',
            'email'=>'sam@gmail.com',
            'password'=>bcrypt('sam123'),
            'type'=>'employee',           
          ]);
    }
}
