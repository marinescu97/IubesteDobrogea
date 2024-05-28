<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnuntEveniment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('anunt_eveniment', function (Blueprint $table) {
            $table->id();
            $table->text('anunt');
            $table->text('imagini')->nullable();
            $table->unsignedBigInteger('producator')->unsigned()->default('0');
            $table->foreign('producator')->references('id')->on('producator')->onDelete('cascade');
            $table->unsignedBigInteger('eveniment')->unsigned();
            $table->foreign('eveniment')->references('id')->on('eveniment')->onDelete('cascade');
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
        Schema::dropIfExists('anunt_eveniment');
    }
}
