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
        Schema::table('announcements', function (Blueprint $table) {
            // creazione category_id 
            $table->unsignedBigInteger('category_id')->nullable();
            // creazione vincolo fk
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('announcements', function (Blueprint $table) {
            // togli il vincolo 
            $table->dropForeign(['category_id']);
            // togli la colonna 
            $table->dropColumn(['category_id']);
        });
    }
};
