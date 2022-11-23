<?php

namespace Database\Factories;

use App\Models\User;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\People>
 */
class PeopleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = FakerFactory::create('pt_BR');

        $gender = ['Masculino', 'Feminino'];
        $colors = ['Branco', 'Negro', 'Pardo'];

        return [
            'name' => $this->faker->name,
            'gender' => $this->faker->randomElement($gender),
            'color' => $this->faker->randomElement($colors),
            'cpf' => $faker->cpf(),
            'rg' => $faker->rg(),
            'ssp' => 'SSP/RR',
            'birth' => $this->faker->dateTimeBetween('-1 week', '+1 week'),
            'nationality' => $this->faker->country(),
            'naturalness' => $this->faker->state(),
            'user_id' => User::all()->random(1)->first()->id
        ];
    }
}
