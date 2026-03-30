<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('product_image_path'); // Path gambar produk (misal: 'banners/iphone.png')
            $table->string('bg_image_path'); // Path gambar latar belakang (misal: 'banners/bg_dark.png')
            $table->string('link'); // Tautan saat tombol di klik (misal: '/shop/apple-iphone')
            $table->integer('order')->default(0); // Urutan tampil
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
