<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{

       /**
     * 
     * 
     *     @var string
     */
    protected $model = \App\Models\Car::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'founded' => $this->faker->year,
            'description' => $this->faker->text(100)
        ];
    }
}
