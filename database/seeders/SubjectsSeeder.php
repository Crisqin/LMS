<?php

namespace Database\Seeders;

use App\Models\Solutions;
use App\Models\Subjects;
use App\Models\Tasks;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('Subjects')->truncate();
        //DB::table('Tasks')->truncate();

        //$solutions=Solutions::all();
        $teacherUsers=DB::table('users')->where('isTeacher','=',1)->get();
        //$studentUsers=DB::table('users')->where('isTeacher','=',0)->get();

        // Subjects::factory(4)->for($teacherUsers[0])->create()->each(function ($subject) {
        //     $subject->tasks()->createMany(
        //         Tasks::factory(5)->make()
        //         )->each(function ($task) {
        //             $task->solutions()->createMany(Solutions::factory(4)->make())
        //     });
        //  });

        Subjects::factory(4)->has(Tasks::factory(4)->has(Solutions::factory(5)))->create();

        $subjects=DB::table('Subjects')->where('user_id','=',null)->get()
        ->each(function ($subject) use ($teacherUsers){
            $subject->user_id=$teacherUsers->id;
        } );
        $subjects->update($subjects);

    }
}
