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
        Schema::create('hely', function (Blueprint $table) {
            $table->unsignedBigInteger('fkod');
            $table->unsignedBigInteger('moziazon');
            $table->primary(['fkod', 'moziazon']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hely');
    }
};
