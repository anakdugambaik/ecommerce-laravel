<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BLUEE - Home</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    
    <style>
        .swiper-container {
            width: 100%;
            padding: 1rem 0 3rem 0;
            overflow: hidden;
        }
        .swiper-slide {
            width: auto;
            max-width: 900px;
        }
        .swiper-slide-active {
            transform: scale(1);
            transition: transform 0.5s ease-in-out;
            z-index: 10;
        }
        .swiper-slide:not(.swiper-slide-active) {
            opacity: 0.5;
            transform: scale(0.95);
            transition: all 0.5s ease-in-out;
        }
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>
<body class="antialiased bg-white text-gray-900 font-sans overflow-x-hidden">

    <header class="bg-white border-b border-gray-100 py-4 px-6 md:px-12 flex items-center justify-between">
        <div class="flex items-center gap-6">
            <a href="/" class="text-2xl font-black text-blue-700 italic flex items-center gap-2">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="2" y="6" width="6" height="12" rx="2" fill="#2563EB"/>
                    <rect x="10" y="4" width="6" height="16" rx="2" fill="#2563EB"/>
                    <rect x="18" y="6" width="6" height="12" rx="2" fill="#2563EB"/>
                </svg>
                <span class="font-black italic tracking-tighter text-blue-700">BLUEE</span>
            </a>
            <button class="hidden md:flex text-sm font-medium text-gray-700 items-center gap-1 hover:text-blue-600 transition">
                Categories <span class="text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 011.06 0L10 11.94l3.72-3.72a.75.75 0 111.06 1.06l-4.25 4.25a.75.75 0 01-1.06 0L5.22 9.28a.75.75 0 010-1.06z" clip-rule="evenodd" /></svg>
                </span>
            </button>
        </div>
        <div class="relative w-full max-w-xl hidden md:block">
            <input type="search" placeholder="Search any products" class="w-full bg-gray-50 rounded-full pl-10 pr-4 py-2 border border-gray-200 text-sm focus:ring-2 focus:ring-blue-500 focus:bg-white outline-none transition">
            <span class="absolute left-3 top-2.5 text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" /></svg>
            </span>
        </div>
        <div class="flex items-center gap-6">
            <button class="text-gray-500 hover:text-blue-600 transition relative">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" /></svg>
            </button>
            <button class="text-gray-500 hover:text-blue-600 transition relative">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0M3.124 7.5A8.969 8.969 0 015.292 3m13.416 0a8.969 8.969 0 012.168 4.5" /></svg>
                <span class="absolute -top-1.5 -right-2 text-[10px] font-bold bg-red-500 text-white rounded-full px-1.5 py-0.5 min-w-[18px] text-center">3</span>
            </button>
            <button class="text-gray-500 hover:text-blue-600 transition relative">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" /></svg>
                <span class="absolute -top-1.5 -right-2 text-[10px] font-bold bg-red-500 text-white rounded-full px-1.5 py-0.5 min-w-[18px] text-center">1</span>
            </button>
            <a href="#" class="hidden sm:block bg-blue-700 text-white px-6 py-2 rounded-lg font-semibold text-sm hover:bg-blue-800 transition shadow-sm">Sign In/Register</a>
        </div>
    </header>

    <nav class="bg-white px-6 md:px-12 py-3 border-b border-gray-100 shadow-sm">
        <div class="flex items-center gap-8 overflow-x-auto whitespace-nowrap scrollbar-hide">
            <a href="/" class="flex items-center gap-2 text-blue-700 font-bold text-sm">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5"><path fill-rule="evenodd" d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z" clip-rule="evenodd" /></svg>
                Homepage
            </a>
            <a href="#" class="flex items-center gap-2 text-gray-600 hover:text-blue-600 font-medium text-sm transition">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-amber-500"><path d="M11.983 1.907a.75.75 0 00-1.292-.657l-7 9.5a.75.75 0 00.176 1.032l3.252 2.168-1.053 6.315a.75.75 0 001.292.657l7-9.5a.75.75 0 00-.176-1.032l-3.252-2.168 1.053-6.315z" /></svg>
                Flash Deals
            </a>
            <a href="#" class="flex items-center gap-2 text-gray-600 hover:text-blue-600 font-medium text-sm transition">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-gray-400"><path fill-rule="evenodd" d="M9.69 18.933a1 1 0 001.238 0c3.951-3.078 6.96-6.854 6.96-10.783 0-4.072-3.377-7.25-7.388-7.25-4.011 0-7.388 3.228-7.388 7.25 0 3.929 3.01 7.705 6.96 10.783zM11 8a1 1 0 11-2 0 1 1 0 012 0z" clip-rule="evenodd" /></svg>
                Track Order
            </a>
            <a href="#" class="flex items-center gap-2 text-gray-600 hover:text-blue-600 font-medium text-sm transition">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-blue-500"><path fill-rule="evenodd" d="M3 4.25a.75.75 0 01.75-.75h12.5a.75.75 0 010 1.5H3.75A.75.75 0 013 4.25zm11.22 3.22a.75.75 0 011.06 1.06l-4.25 4.25a.75.75 0 01-1.06 0L5.72 8.53a.75.75 0 011.06-1.06L10 10.69l4.22-4.22zM3 13.75a.75.75 0 01.75-.75h12.5a.75.75 0 010 1.5H3.75A.75.75 0 013 13.75zm1.28 2.53a.75.75 0 01-1.06-1.06L6.69 12H3.75a.75.75 0 010-1.5h4a.75.75 0 01.75.75v4a.75.75 0 01-1.5 0v-2.94l-3.47 3.47z" clip-rule="evenodd" /></svg>
                Return & Refund
            </a>
            <a href="#" class="flex items-center gap-2 text-gray-600 hover:text-blue-600 font-medium text-sm transition">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-amber-600"><path d="M6.5 3a1.5 1.5 0 00-1.5 1.5V11H3.5A1.5 1.5 0 002 12.5v4A1.5 1.5 0 003.5 18h13a1.5 1.5 0 001.5-1.5v-4a1.5 1.5 0 00-1.5-1.5H15V4.5A1.5 1.5 0 0013.5 3h-7zM15 11h-1.5V5a.5.5 0 00-.5-.5h-6a.5.5 0 00-.5.5v6H5V5a1.5 1.5 0 011.5-1.5h6A1.5 1.5 0 0115 5v6z" /></svg>
                Shipping Info
            </a>
            <a href="#" class="flex items-center gap-2 text-gray-600 hover:text-blue-600 font-medium text-sm transition">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-slate-500"><path fill-rule="evenodd" d="M10.293 12.707a1 1 0 01-1.414 0l1-1a1 1 0 011.414 0l-1 1zm0 0a1 1 0 01-1.414 0l-1.5-1.5a1 1 0 011.414-1.414l1.5 1.5a1 1 0 010 1.414z" clip-rule="evenodd" /><path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2H4zm0 2h12v10H4V6z" clip-rule="evenodd" /></svg>
                About Us
            </a>
            <a href="#" class="flex items-center gap-2 text-gray-600 hover:text-blue-600 font-medium text-sm transition">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-purple-400"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-11.293a1 1 0 10-1.414 1.414l.293.293-1.086 1.086c-.195.195-.512.195-.707 0l-.293-.293a1 1 0 10-1.414 1.414l1.086 1.086c.195.195.195.512 0 .707l-1.086 1.086a1 1 0 101.414 1.414l.293-.293 1.086-1.086c.195-.195.512-.195.707 0l.293.293a1 1 0 101.414-1.414l-1.086-1.086c-.195-.195-.195-.512 0-.707l1.086-1.086z" clip-rule="evenodd" /></svg>
                Customer Services
            </a>
        </div>
    </nav>

    <section class="mt-6">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                @foreach (array_merge($banners ?? [], $banners ?? [], $banners ?? []) as $banner)
                    <div class="swiper-slide {{ $banner['bg_color'] }} rounded-[2rem] overflow-hidden shadow-2xl mx-3">
                        <div class="flex flex-col md:flex-row items-center justify-between p-8 md:p-12 h-full">
                            <div class="flex-1 text-white mb-8 md:mb-0 md:pr-8">
                                <h1 class="text-4xl md:text-5xl font-extrabold mb-4 leading-tight">{{ $banner['title'] }}</h1>
                                <p class="text-lg md:text-xl text-gray-200 mb-8 font-light">{{ $banner['description'] }}</p>
                                <a href="{{ $banner['link'] }}" class="inline-block bg-white text-gray-900 font-bold px-8 py-3 rounded-xl text-sm border-2 border-white hover:bg-transparent hover:text-white transition-all">
                                    Shop Now &rarr;
                                </a>
                            </div>
                            <div class="flex-none w-full md:w-1/2 flex justify-center relative">
                                <img src="{{ $banner['image_url'] }}" alt="Banner Image" class="h-64 md:h-80 object-contain drop-shadow-2xl z-10 relative">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section class="mt-8 px-6 md:px-12">
        <div class="flex items-center justify-between mb-8">
            <h2 class="text-2xl md:text-3xl font-extrabold text-gray-900">Explore High Quality <br> Products by Categories</h2>
            <a href="#" class="hidden md:inline-block bg-gray-900 text-white px-6 py-3 rounded-full font-bold text-sm hover:bg-gray-800 transition shadow-md">VIEW ALL &rarr;</a>
        </div>
        
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-4 md:gap-6">
            @foreach ($categories ?? [] as $category)
                <a href="#" class="bg-white p-6 md:p-8 rounded-3xl border border-gray-100 shadow-sm flex flex-col items-center justify-center text-center gap-4 hover:border-blue-500 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group">
                    <div class="w-16 h-16 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                        @if($category['icon'] == 'laptop')
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8"><path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" /></svg>
                        @elseif($category['icon'] == 'furniture')
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" /></svg>
                        @elseif($category['icon'] == 'electronic')
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21m-9-1.5h10.5a2.25 2.25 0 002.25-2.25V6.75a2.25 2.25 0 00-2.25-2.25H6.75A2.25 2.25 0 004.5 6.75v10.5a2.25 2.25 0 002.25 2.25zm.75-12h9v9h-9v-9z" /></svg>
                        @elseif($category['icon'] == 'accessories')
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18.75a6 6 0 006-6v-1.5m-6 7.5a6 6 0 01-6-6v-1.5m6 7.5v3.75m-3.75 0h7.5M12 15.75a3 3 0 01-3-3V4.5a3 3 0 116 0v8.25a3 3 0 01-3 3z" /></svg>
                        @elseif($category['icon'] == 'smartphone')
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" /></svg>
                        @else
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z" /></svg>
                        @endif
                    </div>
                    <span class="font-bold text-gray-800 text-sm md:text-base group-hover:text-blue-600 transition-colors">{{ $category['name'] }}</span>
                </a>
            @endforeach
        </div>
    </section>

    <section class="mt-20 px-6 md:px-12 pb-24">
        <div class="flex items-center justify-between mb-8">
            <h2 class="text-2xl md:text-3xl font-extrabold text-gray-900 leading-tight">Shop Quality Picks <br> from Top Sellers</h2>
            <a href="#" class="hidden md:inline-flex items-center gap-2 bg-gray-900 text-white px-6 py-3 rounded-full font-bold text-sm hover:bg-gray-800 transition shadow-md">
                VIEW ALL 
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg>
            </a>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-5">
            @php
                $products = [
                    ['name' => 'Puma Women Runnin...', 'category' => 'Pakaian O...', 'price' => '400,000', 'sold' => '120 Sold', 'image' => 'https://picsum.photos/seed/puma/400/400'],
                    ['name' => 'Puma Men Running...', 'category' => 'Pakaian O...', 'price' => '1,080,000', 'sold' => '120 Sold', 'image' => 'https://picsum.photos/seed/shorts/400/400'],
                    ['name' => 'Airpods Gen Z 2025', 'category' => 'Aksesoris...', 'price' => '1,200,000', 'sold' => '120 Sold', 'image' => 'https://picsum.photos/seed/airpods/400/400'],
                    ['name' => 'Xiaomi Whirl Wireles...', 'category' => 'Aksesoris...', 'price' => '189,000', 'sold' => '120 Sold', 'image' => 'https://picsum.photos/seed/headphone/400/400'],
                    ['name' => 'Samsung Galaxy S24', 'category' => 'Smartphone', 'price' => '15,400,000', 'sold' => '85 Sold', 'image' => 'https://picsum.photos/seed/samsung/400/400'],
                    ['name' => 'Nike Sportswear Bra', 'category' => 'Pakaian O...', 'price' => '550,000', 'sold' => '210 Sold', 'image' => 'https://picsum.photos/seed/bra/400/400'],
                    ['name' => 'iPhone 15 Pro Max', 'category' => 'Smartphone', 'price' => '21,080,000', 'sold' => '40 Sold', 'image' => 'https://picsum.photos/seed/iphone15/400/400'],
                    ['name' => 'Adidas Ultraboost', 'category' => 'Sepatu', 'price' => '2,200,000', 'sold' => '95 Sold', 'image' => 'https://picsum.photos/seed/shoes/400/400'],
                ];
            @endphp

            @foreach($products as $product)
            <div class="bg-white rounded-2xl md:rounded-3xl border border-gray-100 p-3 transition-all duration-300 ease-out hover:shadow-[0_10px_20px_rgba(0,0,0,0.06)] hover:-translate-y-1.5 hover:border-blue-100 group flex flex-col h-full cursor-pointer">
                
                <div class="w-full aspect-square bg-[#F8F9FA] rounded-xl md:rounded-2xl overflow-hidden mb-3 relative flex items-center justify-center p-2 md:p-3">
                    <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500 ease-in-out" loading="lazy">
                </div>

                <div class="flex items-center gap-2 mb-2">
                    <span class="bg-blue-50 text-blue-700 font-bold text-[9px] md:text-[10px] px-2 py-1 rounded-md">{{ $product['category'] }}</span>
                    <span class="text-red-500 font-bold text-[9px] md:text-[10px]">{{ $product['sold'] }}</span>
                </div>

                <div class="flex-grow">
                    <h3 class="font-bold text-gray-900 mb-1 text-xs md:text-sm leading-snug truncate">{{ $product['name'] }}</h3>
                    <p class="text-blue-700 font-extrabold text-sm md:text-base">Rp {{ $product['price'] }}</p>
                </div>

                <div class="flex items-center gap-2 mt-3 pt-3 border-t border-gray-50">
                    <button class="w-8 h-8 md:w-9 md:h-9 rounded-lg md:rounded-xl bg-red-50 text-red-400 flex items-center justify-center hover:bg-red-500 hover:text-white transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" /></svg>
                    </button>
                    <button class="flex-1 h-8 md:h-9 rounded-lg md:rounded-xl bg-blue-50 text-blue-700 font-bold text-[11px] md:text-xs flex items-center justify-center gap-1 hover:bg-blue-600 hover:text-white transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-3.5 h-3.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" /></svg>
                        Add to Cart
                    </button>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var swiper = new Swiper(".swiper-container", {
                slidesPerView: "auto",
                centeredSlides: true,
                spaceBetween: 20,
                loop: true,
                loopedSlides: 4,
                speed: 800,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
            });
        });
    </script>
</body>
</html>