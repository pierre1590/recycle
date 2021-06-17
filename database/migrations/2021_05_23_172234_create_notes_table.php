<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->increments('id')->start_from(1);
            $table->unsignedInteger('day_id');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('giorno_raccolta_id');
            $table->time('ora_inizio');
            $table->time('ora_fine');
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
        Schema::dropIfExists('notes');
    }
}
