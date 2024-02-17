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
            // aggiungi colonna user_id 
            $table->unsignedBigInteger('user_id')->nullable();
            // aggiungi vincolo 
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // onDelete('cascade') fa si che all'eliminazione di un utente vengano eliminati automaticamente tutti gli annunci ad esso collegati 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('announcements', function (Blueprint $table) {
            // rimuovi vincolo 
            $table->dropForeign(['user_id']);
            // rimuovi colonna
            $table->dropColumn(['user_id']);
        });
    }
};
