<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Client::class;

    public function definition(): array
    {
        return [
            'document' => $this->faker->unique()->randomNumber(),
            'names' => $this->faker->firstName,
            'surnames' => $this->faker->lastName,
            'address' => $this->faker->address,
            'celphone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'birth_date' => $this->faker->date('Y-m-d', '-18 years'),
            'gender' => $this->faker->randomElement(['Masculino', 'Femenino']),
        ];
    }
}
