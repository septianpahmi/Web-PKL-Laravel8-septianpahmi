<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $userData =[
            [
                'name'=>'Staf',
                'email' => 'staf@example.com',
                'role' => 'staf',
                'password' => bcrypt('12345678')
            ],
            [
                'name'=>'hubin',
                'email' =>'hubin@example.com',
                'role' =>'hubin',
                'password' => bcrypt('12345678')
            ],
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
