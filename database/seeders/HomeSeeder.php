<?php

namespace Database\Seeders;

use App\Models\Banner;
use App\Models\Category;
use Illuminate\Database\Seeder;

class HomeSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Data Kategori
        $categories = [
            ['name' => 'Laptop', 'icon_path' => '/images/icons/laptop.svg', 'order' => 1],
            ['name' => 'Furniture Dapur', 'icon_path' => '/images/icons/cup.svg', 'order' => 2],
            ['name' => 'Elektronik', 'icon_path' => '/images/icons/speaker.svg', 'order' => 3],
            ['name' => 'Aksesoris Gadget', 'icon_path' => '/images/icons/cable.svg', 'order' => 4],
            ['name' => 'Smartphone', 'icon_path' => '/images/icons/smartphone.svg', 'order' => 5],
        ];
        foreach ($categories as $cat) {
            Category::create($cat);
        }

        // 2. Data Banner Iklan
        $banners = [
            [
                'title' => 'Upgrade to iPhone 20 Pro Now',
                'description' => 'Build for Apple intelligence.',
                'product_image_path' => '/images/banners/iphone.png',
                'bg_image_path' => '/images/banners/bg_apple.png', // Latar belakang gelap seperti di gambar
                'link' => '/shop/apple-iphone',
                'order' => 1
            ],
            [
                'title' => 'Thoughtful Presents for Family and Friends',
                'description' => 'Discounts on special gift bundles.',
                'product_image_path' => '/images/banners/gift.png',
                'bg_image_path' => '/images/banners/bg_gift.png', // Latar belakang biru di gambar
                'link' => '/shop/gifts',
                'order' => 2
            ],
        ];
        foreach ($banners as $banner) {
            Banner::create($banner);
        }
    }
}
