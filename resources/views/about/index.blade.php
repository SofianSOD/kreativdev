@extends('layouts.public')

@section('title', 'Tentang Kami - Kreatif Dev')

@section('content')
    <!-- Hero Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 text-center fade-in-up">
            <span class="text-nusana-light font-bold text-sm uppercase tracking-wider mb-2 block">Tentang Kreatif Dev</span>
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Lebih Dari Agensi. Kami Partner Sukses Anda.</h1>
            <p class="text-gray-500 text-lg max-w-2xl mx-auto">Menggabungkan kreativitas dan teknologi untuk menciptakan
                dampak nyata bagi bisnis di Indonesia.</p>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <div class="fade-in-up">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2070&auto=format&fit=crop"
                        alt="Team Working" class="rounded-3xl shadow-2xl">
                </div>
                <div class="fade-in-up stagger-1">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">DNA Kreatif Kami</h2>
                    <div class="prose prose-lg text-gray-500">
                        <p class="mb-6">
                            Lahir dari semangat inovasi, Kreatif Dev hadir untuk mendobrak batasan konvensional. Kami bukan
                            sekadar vendor IT, kami adalah arsitek masa depan digital bisnis Anda.
                        </p>
                        <p class="mb-6">
                            Setiap baris kode yang kami tulis dan setiap piksel yang kami desain memiliki satu tujuan:
                            memastikan brand Anda tidak hanya dilihat, tapi diingat dan dicintai.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Values -->
    <section class="py-20 section-nusana-bg">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Visi -->
                <div class="card-nusana fade-in-up">
                    <div class="w-14 h-14 bg-blue-50 rounded-xl flex items-center justify-center text-nusana-light mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Visi Kami</h3>
                    <p class="text-gray-500">Menjadi standar emas industri digital Indonesia yang mencetak kisah sukses bagi
                        ribuan UMKM dan korporasi.</p>
                </div>
                <!-- Misi -->
                <div class="card-nusana fade-in-up stagger-1">
                    <div class="w-14 h-14 bg-blue-50 rounded-xl flex items-center justify-center text-nusana-light mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Misi Kami</h3>
                    <p class="text-gray-500">Memberikan solusi digital yang tidak hanya 'bagus' di mata kami, tapi
                        'menghasilkan' profit nyata bagi Anda.</p>
                </div>
                <!-- Nilai -->
                <div class="card-nusana fade-in-up stagger-2">
                    <div class="w-14 h-14 bg-blue-50 rounded-xl flex items-center justify-center text-nusana-light mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Nilai Kami</h3>
                    <p class="text-gray-500">Obsesi pada Kualitas, Transparansi Total, dan Hasil yang Terukur.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <!-- <section class="py-20 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16 fade-in-up">
                    <h2 class="text-3xl font-bold text-gray-900">The Dream Team</h2>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    @foreach($team as $member)
                        <div class="text-center fade-in-up">
                            <div
                                class="relative w-32 h-32 mx-auto mb-6 rounded-full overflow-hidden border-4 border-white shadow-lg">
                                <img src="{{ $member['image'] }}" alt="{{ $member['name'] }}" class="w-full h-full object-cover">
                            </div>
                            <h3 class="text-lg font-bold text-gray-900">{{ $member['name'] }}</h3>
                            <p class="text-sm text-gray-500">{{ $member['role'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section> -->

    <!-- CTA -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div
                class="bg-gradient-to-r from-nusana-light to-nusana-dark rounded-3xl p-10 md:p-16 text-center text-white relative overflow-hidden shadow-2xl">
                <div class="relative z-10 max-w-3xl mx-auto">
                    <h2 class="text-3xl md:text-5xl font-bold mb-6">Siap Kolaborasi Mencetak Sejarah?</h2>
                    <p class="text-blue-100 text-lg mb-10">Ide brilian Anda layak dieksekusi oleh tim terbaik.</p>
                    <a href="https://wa.me/{{ \App\Models\Setting::where('key', 'contact_whatsapp')->value('value') ?? '62895365639577' }}"
                        class="bg-white text-nusana-dark px-8 py-4 rounded-full font-bold text-lg hover:bg-blue-50 transition-colors shadow-lg inline-flex items-center gap-2">
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection