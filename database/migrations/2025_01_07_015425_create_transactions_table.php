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
        Schema::create('transactions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id');
            $table->uuid('game_id');
            $table->uuid('currency_id');
            $table->integer('amount');
            $table->decimal('total_price', 10, 2);
            $table->enum('status', ['pending', 'completed', 'failed'])->default('pending');
            $table->timestamp('transaction_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamps();
    
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('game_id')->references('id')->on('games')->onDelete('cascade');
            $table->foreign('currency_id')->references('id')->on('game_currencies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
