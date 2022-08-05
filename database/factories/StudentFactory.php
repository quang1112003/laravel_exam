<?php

namespace Database\Factories;

use App\Models\Classes;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => "SV".$this->faker->randomNumber(),
            'name'=>$this->faker->firstName,
            'age'=>$this->faker->date('Y-m-d','2005-01-01'),
            'address'=>$this->faker->firstName,
            'telephone'=>$this->faker->phoneNumber,
        ];
    }
}
