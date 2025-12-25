@extends('layouts.public')

@section('content')
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="mb-4">
                    <a href="/#services"
                        class="inline-flex items-center text-nusana-light font-bold hover:gap-2 transition-all">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                        Kembali ke Layanan
                    </a>
                </div>

                <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="p-8 md:p-12">
                        <div
                            class="w-20 h-20 bg-blue-50 rounded-2xl flex items-center justify-center text-nusana-light mb-8">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>

                        <h1 class="text-3xl md:text-5xl font-bold text-gray-900 mb-6">{{ $service->title }}</h1>

                        <div class="prose prose-lg max-w-none text-gray-600">
                            {!! nl2br(e($service->description)) !!}
                        </div>

                        <div class="mt-12 pt-8 border-t border-gray-100">
                            <h3 class="text-xl font-bold text-gray-900 mb-4">Siap Mengambil Langkah Berikutnya?</h3>
                            <a href="{{ \App\Models\Setting::where('key', 'hero_cta_url')->value('value') ?? '#' }}"
                                class="btn-nusana">
                                Diskusikan Project Ini
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection