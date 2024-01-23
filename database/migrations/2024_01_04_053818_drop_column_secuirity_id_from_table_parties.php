<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void

    {
        // DB::statement('ALTER TABLE parties DROP FOREIGN KEY parties_secuirity_id_foreign');

        Schema::table('parties', function (Blueprint $table) {
            $table->unsignedBigInteger('secuirity_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('table_parties', function (Blueprint $table) {
            //
        });
    }
};
