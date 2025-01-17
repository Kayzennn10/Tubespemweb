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
        Schema::create('game_currencies', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('game_id');
            $table->string('currency_name');
            $table->decimal('price', 10, 2);
            $table->text('description')->nullable();
            $table->timestamps();
    
            $table->foreign('game_id')->references('id')->on('games')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_currencies');
    }
};
