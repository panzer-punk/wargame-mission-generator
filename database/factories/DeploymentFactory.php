<?php

namespace Database\Factories;

use App\Models\Deployment;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeploymentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Deployment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'player_a_points'  => json_encode(['stub' => 1]),
            'player_b_points'  => json_encode(['stub' => 1]),
            'distances_points' => json_encode(['stub' => 1])
        ];
    }
}
