@extends('layout.app')
@section('content')
    <!-- Header Section -->
    <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-10">
        <div class="max-w-2xl">
            <h1 class="text-slate-900 dark:text-white text-5xl font-black tracking-tight mb-4">Galeri Kreatif</h1>
            <p class="text-slate-600 dark:text-slate-400 text-lg leading-relaxed">
                Koleksi pilihan cerita yang digerakkan oleh komunitas, ilustrasi independen, dan momen-momen yang diabadikan
                dari acara-acara terbaru kami.
            </p>
        </div>

    </div>
    <!-- Masonry Grid -->
    <div class="masonry-grid">
        @forelse ($galleries as $gallery)
            <div class="masonry-item group relative overflow-hidden rounded-xl bg-slate-200 dark:bg-slate-800">
                <img class="w-full object-cover transition-transform duration-500 group-hover:scale-110"
                    src="{{ $gallery->image_url ?? 'https://placehold.co/800x600' }}" alt="{{ $gallery->title }}" />
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                    <span class="text-xs font-bold uppercase tracking-widest text-primary mb-2">Gallery</span>
                    <h3 class="text-white font-semibold text-lg mb-1">{{ $gallery->title }}</h3>
                    <p class="text-slate-300 text-sm line-clamp-2">{{ $gallery->description }}</p>
                </div>
            </div>
        @empty
            <div class="col-span-full rounded-xl border border-slate-200 dark:border-slate-700 p-6 text-center">
                <p class="text-slate-600 dark:text-slate-300">Belum ada data galeri.</p>
            </div>
        @endforelse
    </div>
    <!-- Pagination -->
    <div class="mt-8">
        {{ $galleries->links() }}
    </div>
@endsection
