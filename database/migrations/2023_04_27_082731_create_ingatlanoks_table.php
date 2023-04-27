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
        Schema::create('ingatlanoks', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('kategoria')->references('id')->on('kategoriaks');
            $table->string('leiras');
            $table->date('hirdetesDatuma')->default(date('Y-m-d'));
            $table->boolean('tehermentes');
            $table->integer('ar');
            $table->string('kepUrl');
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
        Schema::dropIfExists('ingatlanoks');
    }
};
