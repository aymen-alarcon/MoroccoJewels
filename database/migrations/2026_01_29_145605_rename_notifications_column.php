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
        schema::table('notifications', function(Blueprint $table){
            $table->renameColumn("statu", "status");
            $table->renameColumn("contenu", "content");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::table('notifications', function(Blueprint $table){
            $table->renameColumn("status", "statu");
            $table->renameColumn("content", "contenu");
        });
    }
};
