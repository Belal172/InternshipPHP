<?php

namespace Database\Seeders;
use App\models\student;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $students=collect([
        [
            'name'=>'milan belal',
            'email'=>'milan@gmail.com',
            'phone'=>'9821671720',
            'address'=>'dhangadhi'
        ],
        [
            'name'=>'hari',
            'email'=>'hari@gmail.com',
            'phone'=>'9845678300',
            'address'=>'ktm'
        ],
        [
            'name'=>'ankit belal',
            'email'=>'ankit@gmail.com',
            'phone'=>'9815613651',
            'address'=>'doti'
        ],
        [
            'name'=>'Shreee ram ',
            'email'=>'shree@gmail.com',
            'phone'=>'012555585',
            'address'=>'Ayodhya'
        ],

       ]);
       $students->each(function($student){
        student::insert($student);

       });
    }
}
