<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Solutions;
use App\Models\Subjects;
use App\Models\Tasks;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->truncate();
        //DB::table('Subjects')->truncate();
        //DB::table('Tasks')->truncate();
        DB::table('solutions')->truncate();
        User::create([
            'name' => 'Joe Smith',
            'email' => 'joe@gmail.com',
            'password' => Hash::make('qqqq'),
            'isTeacher' => true,
        ]);
        User::create([
            'name' => 'Jim Raynor',
            'email' => 'jim@gmail.com',
            'password' => Hash::make('qqqq'),
            'isTeacher' => false,
        ]);

        User::factory(2)->has(Subjects::factory(2)->has(Tasks::factory(3)->has(Solutions::factory(3))))->create();
    }
}
