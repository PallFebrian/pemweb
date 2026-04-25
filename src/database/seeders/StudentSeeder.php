<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Student::firstOrCreate([
            'name' => 'parunk',
            'email' => 'parunk@gmail.com',
            'phone' => '08120932138',
        ]);
    }
}
