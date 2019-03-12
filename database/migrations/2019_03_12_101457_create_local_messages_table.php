<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('local_messages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('prestamista_id')->unsigned();
            $table->integer('destinatario_id')->unsigned();
            $table->double('monto');
            $table->double('interes');
            $table->integer('sistema_id')->unsigned();
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
        Schema::dropIfExists('local_messages');
    }
}
