<?php

namespace Database\Factories;

use App\Models\AdditionalMark;
use App\Models\BasicCard;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdditionalCardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'document_drive_storage' => $this->faker->text(),
          'full_disk_sccrc32' => $this->faker->text() ,
          'check_sc_date' => $this->faker->date() ,
          'ct_mode' => $this->faker->text(5),
          'letter' => $this->faker->text(5),
          'note' => $this->faker->text(),
          'basic_card_id' => BasicCard::all()->random()->id,
          'additional_mark_id' => AdditionalMark::all()->random()->id,
        ];
    }
}
