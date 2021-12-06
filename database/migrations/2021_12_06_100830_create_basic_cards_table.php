<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasicCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basic_cards', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedInteger('card_index');
            $table->char('document_number', 191);
            $table->smallInteger('sheet');
            $table->smallInteger('continue_on_sheet');
            $table->text('document_name');
            $table->text('subdivision');
            $table->text('continue_on_company');
            $table->text('edition');
            $table->text('svetok');
            $table->text('original_inventory_number');
            $table->date('original_date_supply');
            $table->smallInteger('original_number_of_sheets');
            $table->text('duplication_inventory_number');
            $table->date('duplication_date_supply');
            $table->smallInteger('duplication_number_of_sheets');
            $table->text('tk_inventory_number');
            $table->date('tk_date_supply');
            $table->smallInteger('tk_number_of_sheets');

            $table->foreignId('basic_format_id')->constrained();
            $table->foreignId('basic_section_id')->constrained();
            $table->unique(['document_number', 'sheet']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('basic_cards');
    }
}
