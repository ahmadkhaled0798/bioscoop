<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderedTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordered_tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('ordernr')
                ->references('id')
                ->on('orders');
            $table->foreign('ticket_id')
                ->references('id')
                ->on('tickets');
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
        Schema::dropIfExists('ordered_tickets');
    }
}
