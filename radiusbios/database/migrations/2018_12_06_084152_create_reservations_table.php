<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('film_id');
            $table->unsignedInteger('hall_number');
            $table->unsignedInteger('ticket_id');
            $table->integer('available_place');
            $table->time('start_time');
            $table->date('reservation_date');
            $table->timestamps();

            $table->foreign('film_id')
                ->references('id')
                ->on('films');
            $table->foreign('hall_number')
                ->references('id')
                ->on('halls');
            $table->foreign('ticket_id')
                ->references('id')
                ->on('tickets');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
