<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetaliiEvenimentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('detalii_eveniment', function (Blueprint $table) {
            $table->id();
            $table->string('imagine')->nullable();
            $table->text('descriere')->nullable();
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
        Schema::dropIfExists('detalii_eveniment');
    }
}
