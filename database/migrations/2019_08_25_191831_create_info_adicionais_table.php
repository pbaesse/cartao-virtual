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
             $table->BigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('info_sites')->onDelete('cascade') ;
            
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
