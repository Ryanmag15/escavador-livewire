<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Process;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ClientProcess>
 */
class ClientProcessFactory extends Factory
{
    public function definition(): array
    {
        return [
            'client_id' => Client::inRandomOrder()->first()?->id ?? Client::factory(),
            'process_id' => Process::inRandomOrder()->first()?->id ?? Process::factory(),
        ];
    }
}
