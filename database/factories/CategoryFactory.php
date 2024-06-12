<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
               'Project_Title' => $this->faker->word(),
                'slug' => $this->faker->slug(),
                'Description' => $this->faker->text(),
                'Project_Address' => $this->faker->address(),
                'Client_Name' => $this->faker->name(),
                'Client_Number' => $this->faker->phoneNumber(),
                'status' => $this->faker->randomElement(['completed', 'In progress', 'pending']),


        ];
    }
}
