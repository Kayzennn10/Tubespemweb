<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('games', function (Blueprint $table) {
            $table->string('image_url')->nullable();  // Kolom untuk menyimpan URL gambar
        });
    }
    
    public function down()
    {
        Schema::table('games', function (Blueprint $table) {
            $table->dropColumn('image_url');
        });
    }
};
