<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coletas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('micro_id');           
            $table->foreign('micro_id')
            ->references('id')->on('micros')
            ->onDelete('cascade');
            $table->string('coleta_ae');
            $table->string('coleta_ad');
            $table->string('coleta_pe');
            $table->string('coleta_pd');
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
        Schema::dropIfExists('coletas');
    }
}
