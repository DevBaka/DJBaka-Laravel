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
    Schema::create('ffxiv_logos', function (Blueprint $table) {
        $table->id();
        $table->string('file_name');
        $table->string('venue_name')->nullable();
        $table->string('logo_path');
        $table->timestamps(); // Entfernen, wenn du $timestamps = false machst
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ffxiv_logos');
    }
};
