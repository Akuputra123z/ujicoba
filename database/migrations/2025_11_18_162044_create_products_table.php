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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // nama produk
            $table->text('description')->nullable(); // deskripsi
            $table->integer('stock')->default(0); // stok
            $table->decimal('price', 12, 2)->default(0); // harga
            $table->string('image')->nullable(); // gambar utama
            $table->json('images')->nullable(); // gambar tambahan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
