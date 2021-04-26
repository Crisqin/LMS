<?php

namespace Database\Factories;

use App\Models\Subjects;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubjectsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Subjects::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->lastName(),
            'code' => $this->faker->regexify('IK-[A-Z]{3}[0-9]{3}'),
            'credit_value' => $this->faker->randomDigitNotNull(),
            'description' => $this->faker->optional()->sentence(),
        ];
    }
}
