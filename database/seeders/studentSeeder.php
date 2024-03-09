<?php

namespace Database\Seeders;

use App\Models\student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class studentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        foreach (range(1, 30) as $index) {
            student::create([
                'name' => $faker->name,
                'student_no' => 'STU' . strtoupper(bin2hex(random_bytes(5))),
                // 'deleted' => 0,
            ]);
        }
    }
}
