@extends('layouts.public')

@section('title', 'Paket Harga - Kreatif Dev')
@section('meta_description', 'Pilihan paket website profesional dengan harga terjangkau untuk bisnis Anda.')

@section('content')
    <section class="py-24 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-3xl mx-auto mb-16 fade-in-up">
                <span class="text-nusana-light font-bold text-sm uppercase tracking-wider mb-2 block">Investasi &
                    Nilai</span>
                <h1 class="text-3xl md:text-5xl font-bold text-gray-900 mb-6">Investasi Cerdas untuk Masa Depan Bisnis</h1>
                <p class="text-gray-500 text-lg">Paket lengkap dengan harga masuk akal. Tanpa biaya tersembunyi. Pilih
                    sesuai pace bisnis Anda.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-start">
                @foreach($packages as $index => $package)
                    <div class="relative flex flex-col h-full fade-in-up stagger-{{ $index + 1 }} 
                                                        {{ $package['is_highlighted'] ? 'transform md:-translate-y-4' : '' }}">

                        @if($package['is_highlighted'])
                            <div class="absolute -top-5 left-0 right-0 z-10 text-center">
                                <span
                                    class="bg-gradient-to-r from-orange-400 to-red-500 text-white text-sm font-bold px-4 py-1 rounded-full shadow-lg">
                                    Paling Populer 🔥
                                </span>
                            </div>
                        @endif

                        <div
                            class="bg-white rounded-3xl shadow-xl border {{ $package['is_highlighted'] ? 'border-nusana-light ring-4 ring-blue-50' : 'border-gray-100' }} p-8 flex-1 flex flex-col transition-transform hover:scale-[1.02] duration-300 card-tilt box-border transform-gpu">

                            <!-- Header -->
                            <div class="mb-6 pointer-events-none">
                                <h3 class="text-2xl font-bold text-gray-900 mb-2">{{ $package['name'] }}</h3>
                                <p class="text-gray-500 text-sm h-10">{{ $package['description'] }}</p>
                            </div>

                            <!-- Price -->
                            <div class="mb-8 pointer-events-none">
                                <div class="flex items-center gap-2 mb-2">
                                    <span class="text-gray-400 line-through text-sm">{{ $package['original_price'] }}</span>
                                    <span
                                        class="bg-blue-100 text-nusana-dark text-xs font-bold px-2 py-1 rounded-lg">{{ $package['discount_label'] }}</span>
                                </div>
                                <div class="flex items-end gap-1">
                                    <span
                                        class="text-4xl font-extrabold text-gray-900 tracking-tight">{{ $package['discounted_price'] }}</span>
                                </div>
                                <p class="text-gray-400 text-xs mt-2">Perpanjangan {{ $package['renewal_price'] }} / tahun</p>
                            </div>

                            <!-- CTA -->
                            <a href="https://wa.me/{{ \App\Models\Setting::where('key', 'contact_whatsapp')->value('value') ?? '62895365639577' }}?text=Halo%2C%20saya%20tertarik%20dengan%20{{ urlencode($package['name']) }}"
                                class="w-full block text-center py-3 rounded-xl font-bold transition-all mb-8 ripple-btn relative overflow-hidden
                                                               {{ $package['is_highlighted'] ? 'btn-nusana text-white shadow-lg hover:shadow-blue-200' : 'bg-blue-50 text-nusana-dark hover:bg-blue-100' }}">
                                Pilih Paket Ini
                            </a>

                            <!-- Features -->
                            <div class="space-y-4 flex-1">
                                <p class="text-sm font-bold text-gray-900 uppercase tracking-wide">Fitur Unggulan:</p>
                                <ul class="space-y-3">
                                    @foreach($package['features'] as $feature)
                                        <li class="flex items-start gap-3 text-sm text-gray-600">
                                            <svg class="w-5 h-5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7" />
                                            </svg>
                                            <span class="leading-tight">{{ $feature }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- FAQ / Additional Info -->
            <div
                class="mt-20 max-w-4xl mx-auto bg-white rounded-3xl p-8 md:p-12 shadow-sm border border-gray-100 text-center">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Punya Kebutuhan Spesifik?</h3>
                <p class="text-gray-500 mb-8">Kami paham setiap bisnis unik. Yuk ngobrol untuk solusi custom yang pas di
                    kantong.</p>
                <a href="https://wa.me/{{ \App\Models\Setting::where('key', 'contact_whatsapp')->value('value') ?? '62895365639577' }}"
                    class="inline-flex items-center text-nusana-light font-bold hover:gap-2 transition-all">
                    Hubungi Sales Consultant
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
@endsection