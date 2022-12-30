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
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->boolean('favorite')->default(0);
            $table->string('tittle');
            $table->text('textContent');
            //Conexão entre a tabela subject e a content
            $table->unsignedBigInteger('subject_id');
            $table->foreign('subject_id')->references('id')->on('subject_models');

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
        Schema::dropIfExists('contents');
    }
};
