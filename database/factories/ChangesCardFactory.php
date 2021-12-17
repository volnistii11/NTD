<?php

namespace Database\Factories;

use App\Models\BasicCard;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChangesCardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'number' => $this->faker->randomFloat(0,1,9),
            'notice_number' => $this->faker->text(10),
            'date' => $this->faker->date(),
            'sheets' => $this->faker->text(5),
            'basic_card_id' => BasicCard::all()->random()->id,
        ];
    }
}
