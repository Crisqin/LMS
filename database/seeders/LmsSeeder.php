<?php

namespace Database\Seeders;

use App\Models\Solutions;
use Illuminate\Database\Seeder;

class LmsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        //$this->call(SolutionsSeeder::class);
        //$this->call(SubjectsSeeder::class);
    }
}
