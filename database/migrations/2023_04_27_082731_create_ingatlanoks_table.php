<?php

use App\Models\Ingatlanok;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Date;
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
            $table->foreignId('Kategória')->references('id')->on('kategoriaks');
            $table->string('Leírás');
            $table->date('Hírdetés dátuma')->default(Date::now());
            $table->boolean('Tehermentes')->default(0);
            $table->integer('ar');
            $table->string('Fénykép');
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
