@extends('layouts.public')

@section('content')
    <!-- Hero Section -->
    <section class="min-h-screen flex items-center pt-20 pb-20 overflow-hidden relative">
        <!-- Background Elements -->
        <div class="absolute inset-0 z-0 opacity-30">
            <div
                class="absolute top-0 right-0 w-[800px] h-[800px] bg-gradient-to-br from-nusana-light/20 to-nusana-dark/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/4">
            </div>
            <div
                class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-gradient-to-tr from-nusana-light/10 to-transparent rounded-full blur-3xl translate-y-1/3 -translate-x-1/4">
            </div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <!-- Text Content -->
                <div class="fade-in-up">
                    <span
                        class="inline-block px-4 py-2 bg-blue-50 text-nusana-light text-sm font-bold rounded-full mb-6 border border-blue-100">
                        🚀 Agensi Digital #1 Pilihan Bisnis Modern
                    </span>
                    <h1
                        class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-gray-900 leading-tight mb-6 tracking-tight">
                        Website Premium. Omzet Maksimum.
                    </h1>
                    <p class="text-lg md:text-xl text-gray-500 mb-8 leading-relaxed max-w-lg">
                        Tinggalkan kesan pertama yang tak terlupakan. Kami bantu bisnis Anda tampil dominan di era digital dengan desain modern dan performa tinggi.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="{{ $settings['hero_cta_url'] ?? '#' }}" class="btn-nusana hover-lift ripple-btn relative overflow-hidden">
                            Mulai Proyek Sekarang
                        </a>
                        <a href="#portfolio"
                            class="px-8 py-3 rounded-full border border-gray-200 text-gray-600 font-bold hover:bg-gray-50 hover:text-nusana-light transition-all">
                            Lihat Bukti Karya
                        </a>
                    </div>

                    <!-- Stats -->
                    <div class="grid grid-cols-3 gap-8 mt-12 border-t border-gray-100 pt-8">
                        <div>
                            <div class="text-3xl font-bold text-gray-900 mb-1"><span class="stat-counter"
                                    data-count="150">5</span>+</div>
                            <div class="text-sm text-gray-500">Proyek Selesai</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-gray-900 mb-1"><span class="stat-counter"
                                    data-count="98">99</span>%</div>
                            <div class="text-sm text-gray-500">Klien Puas</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-gray-900 mb-1"><span class="stat-counter"
                                    data-count="5">10</span>th</div>
                            <div class="text-sm text-gray-500">Pengalaman</div>
                        </div>
                    </div>
                </div>

                <!-- Hero Image -->
                <div class="relative fade-in-up stagger-2 hidden md:block">
                    <!-- Main Image -->
                    <div class="relative z-10 rounded-3xl overflow-hidden shadow-2xl border-4 border-white card-tilt">
                        @php
                            // Try to get the first service image, fallback to settings, then Unsplash
                            $serviceImage = $services->whereNotNull('image')->first()->image ?? null;
                            $bgImage = $serviceImage ?? ($settings['hero_background_image'] ?? null);

                            $bgSrc = $bgImage
                                ? (Str::startsWith($bgImage, 'http') ? $bgImage : asset('storage/' . $bgImage))
                                : 'https://images.unsplash.com/photo-1553877616-1521342920ee?q=80&w=2071&auto=format&fit=crop';
                        @endphp
                        <img src="{{ $bgSrc }}" alt="Hero Image" class="w-full h-auto object-cover">
                    </div>

                    <!-- Floating Elements -->
                    <div
                        class="absolute -top-10 -right-10 w-24 h-24 bg-white rounded-2xl shadow-xl flex items-center justify-center animate-float z-20">
                        <svg class="w-10 h-10 text-nusana-light" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <div class="absolute -bottom-5 -left-5 bg-white px-6 py-4 rounded-xl shadow-xl animate-float-slow z-20">
                        <div class="flex items-center gap-3">
                            <div class="flex -space-x-2">
                                <div class="w-8 h-8 rounded-full bg-gray-200 border-2 border-white"></div>
                                <div class="w-8 h-8 rounded-full bg-gray-300 border-2 border-white"></div>
                                <div class="w-8 h-8 rounded-full bg-gray-400 border-2 border-white"></div>
                            </div>
                            <div class="text-sm font-bold text-gray-900">10+ Klien</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-24 section-nusana-bg">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-2xl mx-auto mb-16 fade-in-up">
                <span class="text-nusana-light font-bold text-sm uppercase tracking-wider mb-2 block">Layanan Unggulan</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Bukan Sekadar Jasa. Ini Solusi.</h2>
                <p class="text-gray-500 text-lg">Strategi digital komprehensif untuk melesatkan bisnis Anda dari hulu ke hilir.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($services as $index => $service)
                    <div class="card-nusana group fade-in-up stagger-{{ $index + 1 }} card-tilt transform-gpu box-border">
                        <div
                            class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center text-nusana-light mb-6 group-hover:bg-gradient-to-br group-hover:from-nusana-light group-hover:to-nusana-dark group-hover:text-white transition-all duration-300">
                            <!-- Dynamic Icons handled by text for now or simple mapping -->
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">{{ $service->title }}</h3>
                        <p class="text-gray-500 leading-relaxed mb-6">{{ Str::limit($service->description, 100) }}</p>
                        <a href="{{ route('services.show', $service->id) }}"
                            class="inline-flex items-center text-nusana-light font-bold hover:translate-x-1 transition-transform">
                            Selengkapnya
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12">
                <div class="max-w-xl fade-in-up">
                    <span class="text-nusana-light font-bold text-sm uppercase tracking-wider mb-2 block">Portofolio</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Karya yang Berbicara</h2>
                    <p class="text-gray-500 mt-4">Bukti nyata bagaimana kami membantu klien mencapai target mereka.</p>
                </div>
                <div class="mt-6 md:mt-0 fade-in-up">
                    <a href="#" class="btn-nusana">Lihat Semua Karya</a>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                @foreach($portfolios as $index => $item)
                    <div class="group cursor-pointer fade-in-up stagger-{{ $index + 1 }} card-tilt transform-gpu box-border"
                        onclick="window.location='{{ route('portfolios.show', $item->id) }}'">
                        <div class="rounded-2xl overflow-hidden shadow-lg mb-6 relative border border-gray-100">
                            <div class="aspect-[16/10] overflow-hidden bg-gray-100">
                                <img src="{{ Str::startsWith($item->image, 'http') ? $item->image : asset('storage/' . $item->image) }}"
                                    alt="{{ $item->title }}"
                                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                            </div>
                            <div
                                class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                <span
                                    class="bg-white text-gray-900 px-6 py-3 rounded-full font-bold transform translate-y-4 group-hover:translate-y-0 transition-transform">Lihat
                                    Detail</span>
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-2 group-hover:text-nusana-light transition-colors">
                            {{ $item->title }}</h3>
                        <p class="text-gray-500">{{ $item->category }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="py-24 section-nusana-bg">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-2xl mx-auto mb-16 fade-in-up">
                <span class="text-nusana-light font-bold text-sm uppercase tracking-wider mb-2 block">Blog & Artikel</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Insight Digital Terbaru</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($posts as $post)
                    <div
                        class="bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-xl transition-all duration-300 group fade-in-up card-tilt transform-gpu box-border">
                        <div class="h-48 overflow-hidden relative">
                            <img src="{{ $post->thumbnail ? asset('storage/' . $post->thumbnail) : 'https://via.placeholder.com/800x600' }}"
                                alt="{{ $post->title }}"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                            <div
                                class="absolute top-4 left-4 bg-white/90 backdrop-blur text-xs font-bold px-3 py-1 rounded-full text-gray-800">
                                {{ $post->category->name }}
                            </div>
                        </div>
                        <div class="p-6">
                            <h3
                                class="text-xl font-bold text-gray-900 mb-3 line-clamp-2 group-hover:text-nusana-light transition-colors">
                                {{ $post->title }}</h3>
                            <p class="text-gray-500 text-sm mb-4 line-clamp-3">{{ Str::limit(strip_tags($post->content), 100) }}
                            </p>
                            <a href="/blog/{{ $post->slug }}"
                                class="text-nusana-light font-bold text-sm flex items-center hover:gap-2 transition-all">
                                Baca Selengkapnya <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div
                class="bg-gradient-to-r from-nusana-light to-nusana-dark rounded-3xl p-10 md:p-16 text-center text-white relative overflow-hidden shadow-2xl">
                <!-- Decorative Circles -->
                <div
                    class="absolute top-0 left-0 w-64 h-64 bg-white/10 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2">
                </div>
                <div
                    class="absolute bottom-0 right-0 w-64 h-64 bg-white/10 rounded-full blur-3xl translate-x-1/2 translate-y-1/2">
                </div>

                <div class="relative z-10 max-w-3xl mx-auto">
                    <h2 class="text-3xl md:text-5xl font-bold mb-6">Siap Dominasi Pasar Digital?</h2>
                    <p class="text-blue-100 text-lg mb-10">Jangan biarkan kompetitor mendahului Anda. Konsultasikan strategi digital Anda sekarang. Gratis.</p>
                    <a href="{{ $settings['hero_cta_url'] ?? '#' }}"
                        class="bg-white text-nusana-dark px-8 py-4 rounded-full font-bold text-lg hover:bg-blue-50 transition-colors shadow-lg inline-flex items-center gap-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                        </svg>
                        Chat Tim Ahli Kami
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection