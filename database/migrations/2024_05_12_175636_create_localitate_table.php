<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocalitateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('localitate', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('judet')->unsigned();
            $table->foreign('judet')->references('id')->on('judet');
            $table->string('nume');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('localitate');
    }
}
