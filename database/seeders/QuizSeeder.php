<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return voiddfgfd
     */
    public function run()
    {
        //
        \App\Models\Quiz::factory(10)->create();
    }
}
