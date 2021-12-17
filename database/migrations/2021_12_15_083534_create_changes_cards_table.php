<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChangesCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('changes_cards', function (Blueprint $table) {
            $table->id();
            $table->integer('number')->nullable();
            $table->text('notice_number');
            $table->date('date');
            $table->text('sheets');

            $table->foreignId('basic_card_id')->constrained();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('changes_cards');
    }
}
