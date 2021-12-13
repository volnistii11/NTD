<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdditionalCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('additional_cards', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('document_drive_storage');
            $table->text('full_disk_sccrc32');
            $table->date('check_sc_date');
            $table->char('ct_mode', 10);
            $table->char('letter', 10);
            $table->text('note');

            $table->foreignId('basic_card_id')->constrained();
            $table->foreignId('additional_mark_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('additional_cards');
    }
}
