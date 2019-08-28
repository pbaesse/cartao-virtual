<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoAdicionaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_adicionais', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('redes_sociais');
             $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('info_sites')->onDelete('cascade') ;
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('info_adicionais');
    }
}
