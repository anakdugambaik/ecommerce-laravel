<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // 1. Data Banner
        $banners = [
            [
                'title' => 'Upgrade to iPhone 20 Pro Now',
                'description' => 'Build for Apple intelligence.',
                'image_url' => 'https://picsum.photos/seed/phone/400/500', 
                'bg_color' => 'bg-slate-900', 
                'link' => '#'
            ],
            [
                'title' => 'Thoughtful Presents for Family and Friends',
                'description' => 'Don\'t miss out — May 1-5, 2026 only!',
                'image_url' => 'http://googleusercontent.com/image_generation_content/1', 
                'bg_color' => 'bg-blue-600', 
                'link' => '#'
            ]
        ];

        // 2. Data Kategori (Menggunakan identifier ikon, bukan emoji lagi)
        $categories = [
            ['name' => 'Laptop', 'icon' => 'laptop'],
            ['name' => 'Furniture Dapur', 'icon' => 'furniture'],
            ['name' => 'Elektronik', 'icon' => 'electronic'],
            ['name' => 'Aksesoris Gadget', 'icon' => 'accessories'],
            ['name' => 'Smartphone', 'icon' => 'smartphone'],
        ];

        // 3. Mengambil data gambar dari API (Lorem Picsum)
        $gridImages = [];
        for ($i = 1; $i <= 10; $i++) {
            $gridImages[] = "https://picsum.photos/400/300?random={$i}";
        }

        return view('welcome', compact('banners', 'categories', 'gridImages'));
    }
}