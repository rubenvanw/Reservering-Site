<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservering', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->enum('tijdblok', ['17:30 - 18:25', '18:30 - 19:25', '19:30 - 20:25']);
            $table->integer('aantal');
            $table->text('opmerking');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservering');
    }
};
