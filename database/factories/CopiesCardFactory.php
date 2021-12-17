<?php

namespace Database\Factories;

use App\Models\BasicCard;
use Illuminate\Database\Eloquent\Factories\Factory;

class CopiesCardFactory extends Factory
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
            'reason_copy' => $this->faker->text(30),
            'received_quantity' => $this->faker->randomFloat(0,1,7),
            'cancel_quantity' => $this->faker->randomFloat(0,1,7),
            'basic_card_id' => BasicCard::all()->random()->id,
        ];
    }
}
