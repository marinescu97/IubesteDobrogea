<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('produs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('categorie')->unsigned();
            $table->foreign('categorie')->references('id')->on('categorie_produs')->onDelete('cascade');
            $table->string('denumire');
            $table->text('descriere')->nullable();
            $table->unsignedBigInteger('producator')->unsigned();
            $table->foreign('producator')->references('id')->on('producator')->onDelete('cascade');
            $table->text('imagini');
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
        Schema::dropIfExists('produs');
    }
}
