<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{

    protected $model = Student::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dni'=>$this->faker->randomNumber(8),
            'name'=>$this->faker->name(),
            'surname'=>$this->faker->lastName(),
            'email'=>$this->faker->email(),
            'phone'=>$this->faker->phoneNumber()
        ];
    }
}
