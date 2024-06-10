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
        Schema::table('kakastros', function (Blueprint $table) {
            //
            $table->foreignId('tanya_id')->nullable()->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kakastros', function (Blueprint $table) {
            //
            $table->dropForeign(['tanya_id']);
            $table->dropColumn('tanya_id');
        });
    }
};
