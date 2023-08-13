<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('brasileiro', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ano');
            $table->string('campeao');
            $table->string('vice');
            $table->string('terceiro');
            $table->string('quarto');
            $table->string('quinto');
            $table->string('sexto');
            $table->string('artilheiro');
            $table->string('gols');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brasileirao');
    }
};
