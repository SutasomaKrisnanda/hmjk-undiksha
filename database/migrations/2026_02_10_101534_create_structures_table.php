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
    Schema::create('structures', function (Blueprint $table) {
        $table->id();
        $table->string('name'); // Nama Lengkap
        $table->string('position'); // Jabatan (Ketua, Kabid, Anggota, dll)
        $table->string('division'); // Nama Bidang/Departemen (BPH, Pendidikan, PSDM, dll)
        $table->string('division_code')->nullable(); // Kode untuk slug/url (pendidikan, psdm, dll)
        $table->string('photo')->nullable(); // Path foto
        $table->integer('order_level')->default(99); // Urutan hierarki (1=Dekan, 2=BPH, 3=Kabid, 4=Sekbid, 5=Staff)
        $table->string('color_theme')->nullable(); // Warna tema bidang (blue, green, dll)
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('structures');
    }
};
