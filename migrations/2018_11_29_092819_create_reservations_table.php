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
            $table->foreign('film_id')
                ->references('id')
                ->on('films');
            $table->foreign('hall_number')
                ->references('id')
                ->on('halls');
            $table->foreign('ticket_id')
                ->references('id')
                ->on('tickets');
            $table->integer('available_place');
            $table->time('start_time');
            $table->date('reservation_date');
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
        Schema::dropIfExists('reservations');
    }
}
