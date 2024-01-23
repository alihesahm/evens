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
        Schema::table('parties',function(Blueprint $table){
            $table->unsignedBigInteger('secuirity_id')->nullable();
            $table->foreign('secuirity_id')->references('id')->on('secuirities');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('parties',function(Blueprint $table){
            $table->dropColumn('secuirity_id');
        });
    }
};
