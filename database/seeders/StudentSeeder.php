<?php

namespace Database\Seeders;

use App\Models\Student;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Student::factory(10)->create();
        for ($i = 1; $i <= 10; $i++) {
            Student::create([
                'name' => fake()->name(),
                'address' => fake()->address(),
            ]);
        }
    }
}
