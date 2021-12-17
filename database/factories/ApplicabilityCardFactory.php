<?php

namespace Database\Factories;

use App\Models\BasicCard;
use Illuminate\Database\Eloquent\Factories\Factory;

class ApplicabilityCardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date' => $this->faker->date(),
            'designation' => $this->faker->text(30),
            'cypher' => $this->faker->text(30),
            'basic_card_id' => BasicCard::all()->random()->id,
        ];
    }
}
