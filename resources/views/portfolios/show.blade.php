@extends('layouts.public')

@section('content')
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                <div class="mb-6">
                    <a href="/#portfolio" class="inline-flex items-center text-nusana-light font-bold hover:gap-2 transition-all">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                        Kembali ke Portofolio
                    </a>
                </div>
                
                <h1 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4">{{ $portfolio->title }}</h1>
                <div class="flex items-center gap-4 text-gray-500 mb-10">
                    <span class="px-3 py-1 bg-white border border-gray-200 rounded-full text-sm font-bold">{{ $portfolio->category }}</span>
                    @if($portfolio->client_name)
                        <span>&bull;</span>
                        <span>{{ $portfolio->client_name }}</span>
                    @endif
                </div>

                <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden mb-12">
                     <img src="{{ Str::startsWith($portfolio->image, 'http') ? $portfolio->image : asset('storage/' . $portfolio->image) }}" 
                          alt="{{ $portfolio->title }}" class="w-full h-auto">
                </div>
                
                <div class="grid md:grid-cols-3 gap-12">
                    <div class="md:col-span-2">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Tentang Proyek</h2>
                        <div class="prose prose-lg text-gray-600">
                            <!-- Assuming we might have a description later, for now using placeholder or title -->
                            {!! $portfolio->content !!}
                        </div>
                    </div>
                    <div>
                        <div class="card-nusana sticky top-24">
                            <h3 class="text-xl font-bold text-gray-900 mb-6">Info Proyek</h3>
                            
                            <div class="space-y-4 mb-8">
                                <div>
                                    <div class="text-sm text-gray-400 mb-1">Klien</div>
                                    <div class="font-bold text-gray-900">{{ $portfolio->client_name ?? '-' }}</div>
                                </div>
                                <div>
                                    <div class="text-sm text-gray-400 mb-1">Kategori</div>
                                    <div class="font-bold text-gray-900">{{ $portfolio->category }}</div>
                                </div>
                                <div>
                                    <div class="text-sm text-gray-400 mb-1">Tahun</div>
                                    <div class="font-bold text-gray-900">{{ $portfolio->created_at->format('Y') }}</div>
                                </div>
                            </div>
                            
                            @if($portfolio->project_url)
                                <a href="{{ $portfolio->project_url }}" target="_blank" class="btn-nusana w-full">
                                    Kunjungi Website
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
