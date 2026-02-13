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
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Contoh: Bidang Pendidikan dan Profesi
            $table->string('slug')->unique(); // Contoh: pendpro
            $table->string('color_theme')->default('gray'); // Contoh: blue
            $table->string('logo')->nullable(); // Path logo
            $table->text('description')->nullable();
            $table->integer('order_level')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departments');
    }
};
