<?php

namespace Database\Factories;

use App\Models\BasicFormat;
use App\Models\BasicSection;
use Illuminate\Database\Eloquent\Factories\Factory;

class BasicCardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'document_number' => $this->faker->unique->word(),
            'sheet' => 1,
            'document_name' => $this->faker->word(),
            'subdivision' => $this->faker->word(),
            'continue_on_company' => $this->faker->word(),
            'edition' => $this->faker->word(),
            'svetok' => $this->faker->word(),
            'original_inventory_number' => $this->faker->word(),
            'original_date_supply' => $this->faker->date(),
            'original_number_of_sheets' => $this->faker->randomFloat(1, 1, 4),
            'duplication_inventory_number' => $this->faker->word(),
            'duplication_date_supply' => $this->faker->date(),
            'duplication_number_of_sheets' => $this->faker->randomFloat(1, 1, 4),
            'tk_inventory_number' => $this->faker->word(),
            'tk_date_supply' => $this->faker->date(),
            'tk_number_of_sheets' => $this->faker->randomFloat(1, 1, 4),
            'basic_format_id' => BasicFormat::all()->random()->id,
            'basic_section_id' => BasicSection::all()->random()->id
        ];
    }
}
