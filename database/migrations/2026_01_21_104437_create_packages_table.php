<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama Paket (misal: Paket Hemat)
            $table->decimal('price', 12, 0); // Harga
            $table->json('features'); // Fitur-fitur (disimpan dalam bentuk Array JSON)
            $table->boolean('is_popular')->default(false); // Penanda paket terlaris
            $table->string('cta_link')->nullable(); // Link WhatsApp/Kontak
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};