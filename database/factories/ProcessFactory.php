<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Process>
 */
class ProcessFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'number_cnj' => sprintf(
                '%07d-%02d.%04d.%01d.%02d.%04d',
                $this->faker->numberBetween(1000000, 9999999), // número do processo
                $this->faker->numberBetween(10, 99),           // dígito verificador aleatório
                $this->faker->year(),                          // ano
                8,                                             // segmento (justiça comum)
                $this->faker->numberBetween(1, 99),            // tribunal
                $this->faker->numberBetween(1, 9999)           // origem
            ),
            'active' => $this->faker->boolean(),
        ];
    }
}
