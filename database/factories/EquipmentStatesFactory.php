<?php

namespace Database\Factories;

use App\Models\EquipmentStates;
use Illuminate\Database\Eloquent\Factories\Factory;

class EquipmentStatesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EquipmentStates::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'state_id' => $this->faker->randomDigitNotNull,
        'equipment_id' => $this->faker->randomDigitNotNull,
        'note' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
