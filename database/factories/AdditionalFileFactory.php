<?php

namespace Database\Factories;

use App\Models\AdditionalCard;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdditionalFileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'file_name' => $this->faker->text(10),
            'file_path' => $this->faker->filePath(),
            'additional_card_id' => AdditionalCard::all()->random()->id,
        ];
    }
}
