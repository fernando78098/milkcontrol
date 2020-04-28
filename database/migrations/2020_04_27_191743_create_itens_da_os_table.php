<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItensDaOsTable extends Migration
{
    /**
     * Run the migrations.123456,78
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itens_da_os', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('ordem_de_servico_id');
            $table->string('descricao');
            $table->integer('quantidade');
            $table->decimal('valor_unitario', 8, 2);
            $table->decimal('valor_total', 8, 2);
            $table->foreign('ordem_de_servico_id')->references('id')->on('ordem_de_servicos')->onDelete('cascade');
            $table->softDeletes();            
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
        Schema::dropIfExists('itens_da_os');
    }
}
