<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProducatorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('producator', function (Blueprint $table) {
          $table->id();
          $table->string('nume');
          $table->string('prenume');
          $table->string('email')->unique();
          $table->string('telefon');
          $table->text('adresa');
          $table->unsignedBigInteger('judet')->unsigned();
          $table->foreign('judet')->references('id')->on('judet');
          $table->unsignedBigInteger('localitate')->unsigned();
          $table->foreign('localitate')->references('id')->on('localitate');
          $table->string('parola');
          $table->text('descriere')->nullable();
          $table->string('avatar')->nullable()->default('default.jpg');
          $table->boolean('admin')->default(false);
          $table->rememberToken();
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
        Schema::dropIfExists('producator');
    }
}
