<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Staudent>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $semester = now()->month <= 06 ? 01 : 02;
        $shifts = ['Matutino', 'Vespertino'];
        $has_disabled = $this->faker->boolean(10);
        $allergy = $this->faker->boolean(10);

        return [
            'registration' => now()->year + $semester + $this->faker->unique()->randomNumber(4), // matricula
            'shift' => $this->faker->randomElement($shifts), // turno
            'home_school' => $this->faker->company, //escola origem
            'school_year' => $this->faker->year('-10 years'), //ano letivo
            'has_disabled' => $has_disabled, //pnr
            'desc_disabled' => $has_disabled ? $this->faker->sentence : null, //desc pnr
            'allergy' => $allergy, //alergia
            'desc_allergy' => $allergy ? $this->faker->sentence : null, //desc alergia
            'number_brothers' => $this->faker->randomDigit(), //qtd irmaos
        ];
    }
}
