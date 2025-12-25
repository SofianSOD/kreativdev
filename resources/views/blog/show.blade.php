@extends('layouts.public')

@section('title', $post->title . ' - Kreatif Dev')

@section('content')
    <article class="pt-32 pb-24">
        <div class="container mx-auto px-4 md:px-6">
            <div class="max-w-4xl mx-auto">
                <header class="mb-12 text-center md:text-left">
                    <div class="flex items-center justify-center md:justify-start space-x-4 mb-6 text-gray-400">
                        <span class="text-primary-600 font-bold uppercase tracking-wider">{{ $post->category->name }}</span>
                        <span>&nbsp;&bull;&nbsp;</span>
                        <span>{{ $post->created_at->format('d M Y') }}</span>
                    </div>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-gray-900 leading-tight mb-10">
                        {{ $post->title }}
                    </h1>
                    <div class="aspect-[21/9] rounded-3xl overflow-hidden shadow-2xl">
                        <img src="{{ $post->thumbnail ? asset('storage/' . $post->thumbnail) : 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=1200' }}"
                            alt="{{ $post->title }}" class="w-full h-full object-cover">
                    </div>
                </header>

                <div
                    class="prose prose-lg md:prose-xl max-w-none text-gray-700 leading-relaxed prose-headings:text-gray-900 prose-primary">
                    {!! $post->content !!}
                </div>

                <div class="mt-20 border-t border-gray-100 pt-12">
                    <h3 class="text-2xl font-bold mb-8">Berita Terkait</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        @foreach($recentPosts as $recent)
                            <a href="/blog/{{ $recent->slug }}" class="group flex items-start space-x-4">
                                <div class="w-24 h-24 rounded-2xl overflow-hidden flex-shrink-0">
                                    <img src="{{ $recent->thumbnail ? asset('storage/' . $recent->thumbnail) : 'https://via.placeholder.com/100' }}"
                                        class="w-full h-full object-cover group-hover:scale-110 transition-transform">
                                </div>
                                <div>
                                    <h4
                                        class="font-bold text-gray-900 group-hover:text-primary-600 transition-colors line-clamp-2">
                                        {{ $recent->title }}
                                    </h4>
                                    <span
                                        class="text-gray-400 text-sm mt-2 block">{{ $recent->created_at->format('d M Y') }}</span>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </article>
@endsection