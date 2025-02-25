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
        student::create([
            'name'=>'Milan Belal',
            'email'=>'milanbelal@gmail.com'
        ]);
    }
}
