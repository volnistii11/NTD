<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCopiesCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('copies_cards', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->text('reason_copy');
            $table->integer('received_quantity')->nullable();
            $table->integer('cancel_quantity')->nullable();

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
        Schema::dropIfExists('copies_cards');
    }
}
