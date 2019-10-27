<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddEstilosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_estilos', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->enum('temas',['1','2','3','4']);
            //$table->enum('fontes',['1','2','3','4']);
            $table->string('cores');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('add_estilos');
    }
}
