@extends('layouts.public')

@section('title', 'Blog - Kreatif Dev')

@section('content')
    <section class="pt-32 pb-20 bg-gray-50/50">
        <div class="container mx-auto px-4 md:px-6">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h1 class="text-4xl md:text-5xl font-bold mb-6 text-gray-900">Blog & Insight</h1>
                <p class="text-gray-600 text-lg">Strategi, tips, dan wawasan terbaru untuk memenangkan persaingan di era
                    digital.</p>
            </div>

            <!-- Categories -->
            <div class="flex flex-wrap justify-center gap-4 mb-12">
                <a href="/blog" class="px-6 py-2 rounded-full bg-primary-600 text-white font-semibold">Semua</a>
                @foreach($categories as $category)
                    <a href="#"
                        class="px-6 py-2 rounded-full bg-white border border-gray-200 text-gray-600 hover:border-primary-600 hover:text-primary-600 font-semibold transition-colors">
                        {{ $category->name }}
                    </a>
                @endforeach
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($posts as $post)
                    <div
                        class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all border border-gray-100 flex flex-col">
                        <div class="aspect-video relative">
                            <img src="{{ $post->thumbnail ? asset('storage/' . $post->thumbnail) : 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=800&q=80' }}"
                                alt="{{ $post->title }}" class="w-full h-full object-cover">
                            <div class="absolute top-4 left-4">
                                <span
                                    class="bg-primary-600 text-white text-xs font-bold px-3 py-1 rounded-lg uppercase tracking-wider">
                                    {{ $post->category->name }}
                                </span>
                            </div>
                        </div>
                        <div class="p-8 flex-grow flex flex-col">
                            <div class="text-gray-400 text-sm mb-3">{{ $post->created_at->format('d M Y') }}</div>
                            <h3 class="text-xl font-bold mb-4 line-clamp-2 hover:text-primary-600 transition-colors">
                                <a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
                            </h3>
                            <p class="text-gray-600 line-clamp-3 mb-6 flex-grow">
                                {{ Str::limit(strip_tags($post->content), 120) }}
                            </p>
                            <a href="/blog/{{ $post->slug }}"
                                class="text-gray-900 font-bold hover:text-primary-600 flex items-center group">
                                Baca Selengkapnya
                                <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-16 text-center">
                {{ $posts->links() }}
            </div>
        </div>
    </section>
@endsection