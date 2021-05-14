<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $order = 1;
        return [
            'name' => "Student " . $order++,
            'standard' => $this->faker->unique(true)->numberBetween(5, 10),
            'percentage' => $this->faker->unique(true)->numberBetween(10, 99),
            'result' => $this->faker->randomElement(['pass', 'fail']),
            'created_at' => $this->faker->dateTimeBetween($startDate = '-3 years', $endDate = 'now', $timezone = null)
        ];
    }
}
