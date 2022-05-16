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
        Schema::create('ingatlanok', function (Blueprint $table) {
            $table->id();
            $table->string('leiras');
            $table->string('kep');
            $table->unsignedBigInteger('kategoria');

            $table->foreign('kategoria')->references('id')->on('kategoriak');
            $table->boolean('tehermentes');
            $table->timestamp('hirdetesDatuma')->useCurrent();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingatlanok');
    }
};
