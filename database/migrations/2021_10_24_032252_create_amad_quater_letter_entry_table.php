<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmadQuaterLetterEntryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amad_quater_letter_entry', function (Blueprint $table) {
            $table->biginteger('id');
            $table->string('date');
            $table->string('name_letter_person');
            $table->string('contact_no');
            $table->string('quater_no');
            $table->string('name_staff');
            $table->string('detail');

            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('amad_quater_letter_entry');
    }
}
