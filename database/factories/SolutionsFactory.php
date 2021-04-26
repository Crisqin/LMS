<?php

namespace Database\Factories;
use Illuminate\Support\Facades\DB;
use App\Models\Solutions;
use Illuminate\Database\Eloquent\Factories\Factory;

class SolutionsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Solutions::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $teacherUserNames=DB::table('users')->where('isTeacher','=',0)->get('name');
        return [
            'name'=>$this->faker->name(),
            'solution_text'=>$this->faker->sentence(),
            'solution_statue'=>$this->faker->randomElement(['submitted','evaluated']),
            'points'=>$this->faker->optional()->randomDigit(),
            'student_name'=>$teacherUserNames[0]->name,
            'evaluated_at'=>null
        ];
    }
}
