<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvenimentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('eveniment', function (Blueprint $table) {
            $table->id();
            $table->string('titlu');
            $table->date('data');
            $table->time('ora');
            $table->unsignedBigInteger('judet')->unsigned()->nullable();
            $table->foreign('judet')->references('id')->on('judet');
            $table->unsignedBigInteger('localitate')->unsigned()->nullable();
            $table->foreign('localitate')->references('id')->on('localitate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('eveniment');
    }
}
