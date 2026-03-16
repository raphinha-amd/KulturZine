@extends('layout.app')

@section('content')
    <div
        class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-10 border-b border-slate-200 dark:border-slate-800 pb-8">
        <div class="max-w-2xl">
            <h1 class="text-slate-900 dark:text-slate-100 text-4xl md:text-5xl font-extrabold tracking-tight mb-3">Upcoming
                Community Events</h1>
            <p class="text-slate-600 dark:text-slate-400 text-lg leading-relaxed">Join us for a vibrant season of poetry
                readings, hands-on zine workshops, and local publishing fests. Explore the intersection of art and message.
            </p>
        </div>
    </div>

    <div class="flex flex-wrap gap-3 mb-10 overflow-x-auto pb-2">
        <a href="{{ route('event.index') }}"
            class="flex items-center gap-2 px-4 py-2 rounded-full text-sm font-semibold border transition-all {{ blank($selectedCategory) ? 'bg-primary text-white border-primary shadow-md' : 'bg-white dark:bg-slate-800 text-slate-700 dark:text-slate-300 border-slate-200 dark:border-slate-700 hover:border-primary' }}">
            <span class="material-symbols-outlined text-[18px]">calendar_today</span>
            <span>All Events</span>
        </a>

        @foreach ($categories as $category)
            <a href="{{ route('event.index', ['category' => $category->slug]) }}"
                class="flex items-center gap-2 px-4 py-2 rounded-full text-sm font-semibold border transition-all {{ $selectedCategory === $category->slug ? 'bg-primary text-white border-primary shadow-md' : 'bg-white dark:bg-slate-800 text-slate-700 dark:text-slate-300 border-slate-200 dark:border-slate-700 hover:border-primary' }}">
                <span>{{ $category->name_category }}</span>
                <span class="text-xs opacity-80">({{ $category->events_count }})</span>
            </a>
        @endforeach
    </div>

    @if ($featuredEvent)
        @php
            $featuredImage = $featuredEvent->featured_image;
            $isExternalFeaturedImage = $featuredImage && Illuminate\Support\Str::startsWith($featuredImage, 'http');
            $featuredImageUrl = $featuredImage
                ? ($isExternalFeaturedImage
                    ? $featuredImage
                    : asset('storage/' . ltrim($featuredImage, '/')))
                : 'https://placehold.co/1200x700?text=Featured+Event';
        @endphp

        <div class="mb-12 group cursor-pointer">
            <div
                class="flex flex-col lg:flex-row bg-white dark:bg-slate-900 rounded-2xl overflow-hidden shadow-xl border border-slate-200 dark:border-slate-800">
                <div class="lg:w-1/2 relative h-64 lg:h-auto overflow-hidden">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                        style='background-image: url("{{ $featuredImageUrl }}")'>
                    </div>
                    <div
                        class="absolute top-4 left-4 bg-primary text-white px-4 py-1 rounded-full text-xs font-bold uppercase tracking-widest shadow-lg">
                        Featured</div>
                </div>
                <div class="lg:w-1/2 p-8 md:p-10 flex flex-col justify-center">
                    <div class="flex items-center gap-2 text-primary font-bold text-sm mb-3">
                        <span class="material-symbols-outlined text-[18px]">event</span>
                        <span>{{ optional($featuredEvent->start_date)->translatedFormat('l, d F Y • H:i') ?? 'Jadwal belum ditentukan' }}</span>
                    </div>
                    <h2
                        class="text-3xl font-extrabold text-slate-900 dark:text-slate-100 mb-4 group-hover:text-primary transition-colors">
                        {{ $featuredEvent->name_event }}</h2>
                    <p class="text-slate-600 dark:text-slate-400 text-lg mb-6 line-clamp-3">
                        {{ Illuminate\Support\Str::limit(strip_tags((string) $featuredEvent->description), 220) }}
                    </p>
                    <div class="flex flex-wrap items-center gap-6 mb-8">
                        <div class="flex items-center gap-2 text-slate-500 dark:text-slate-400">
                            <span class="material-symbols-outlined">location_on</span>
                            <span class="text-sm">{{ $featuredEvent->location ?? 'Lokasi menyusul' }}</span>
                        </div>
                        @if ($featuredEvent->category)
                            <div class="flex items-center gap-2 text-slate-500 dark:text-slate-400">
                                <span class="material-symbols-outlined">label</span>
                                <span class="text-sm">{{ $featuredEvent->category->name_category }}</span>
                            </div>
                        @endif
                    </div>

                    <div class="flex flex-wrap gap-3">
                        @if ($featuredEvent->is_volunteer_active && $featuredEvent->volunteer_link)
                            <a href="{{ $featuredEvent->volunteer_link }}" target="_blank" rel="noopener noreferrer"
                                class="inline-flex items-center gap-2 bg-primary hover:bg-primary/90 text-white px-8 py-3 rounded-xl font-bold transition-all shadow-lg">
                                <span>Ikut Menjadi Volunteer</span>
                                <span class="material-symbols-outlined">arrow_forward</span>
                            </a>
                        @else
                            <span
                                class="inline-flex items-center gap-2 bg-slate-100 dark:bg-slate-800 text-slate-500 dark:text-slate-400 px-8 py-3 rounded-xl font-bold cursor-not-allowed">
                                <span class="material-symbols-outlined">block</span>
                                <span>Pendaftaran Volunteer Ditutup</span>
                            </span>
                        @endif

                        <a href="{{ route('event.show', $featuredEvent) }}"
                            class="inline-flex items-center gap-2 bg-slate-100 dark:bg-slate-800 hover:bg-slate-200 dark:hover:bg-slate-700 text-slate-900 dark:text-slate-100 px-8 py-3 rounded-xl font-bold transition-all">
                            <span>Lihat Detail</span>
                            <span class="material-symbols-outlined">open_in_new</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-10">
        @forelse ($events as $event)
            @php
                $image = $event->featured_image;
                $isExternalImage = $image && Illuminate\Support\Str::startsWith($image, 'http');
                $imageUrl = $image
                    ? ($isExternalImage
                        ? $image
                        : asset('storage/' . ltrim($image, '/')))
                    : 'https://placehold.co/600x400?text=Event';
            @endphp

            <article
                class="bg-white dark:bg-slate-900 rounded-2xl overflow-hidden shadow-lg border border-slate-100 dark:border-slate-800 flex flex-col group">
                <div class="h-48 overflow-hidden relative">
                    <div class="absolute inset-0 bg-cover bg-center group-hover:scale-110 transition-transform duration-500"
                        style='background-image: url("{{ $imageUrl }}")'>
                    </div>
                </div>
                <div class="p-6 flex-1 flex flex-col">
                    <div class="flex justify-between items-start mb-4 gap-3">
                        <div
                            class="bg-primary/10 text-primary px-3 py-1 rounded-lg text-xs font-bold uppercase max-w-[60%] truncate">
                            {{ $event->category->name_category ?? 'Uncategorized' }}
                        </div>
                        <span class="text-slate-500 dark:text-slate-400 text-sm font-medium whitespace-nowrap">
                            {{ optional($event->start_date)->translatedFormat('d M Y') ?? '-' }}
                        </span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-slate-100 mb-2 leading-tight">
                        {{ $event->name_event }}
                    </h3>
                    <p class="text-slate-600 dark:text-slate-400 text-sm mb-6 flex-1">
                        {{ Illuminate\Support\Str::limit(strip_tags((string) $event->description), 130) }}
                    </p>
                    <div class="flex items-center gap-2 text-slate-500 dark:text-slate-400 mb-6">
                        <span class="material-symbols-outlined text-[18px]">location_on</span>
                        <span class="text-xs">{{ $event->location ?? 'Lokasi menyusul' }}</span>
                    </div>

                    <div class="mt-auto grid grid-cols-1 sm:grid-cols-2 gap-3">
                        @if ($event->is_volunteer_active && $event->volunteer_link)
                            <a href="{{ $event->volunteer_link }}" target="_blank" rel="noopener noreferrer"
                                class="inline-flex items-center justify-center bg-primary/10 hover:bg-primary text-primary hover:text-white py-3 rounded-lg text-sm font-bold transition-all">
                                Ikut Volunteer
                            </a>
                        @else
                            <span
                                class="inline-flex items-center justify-center bg-slate-100 dark:bg-slate-800 text-slate-500 dark:text-slate-400 py-3 rounded-lg text-sm font-bold cursor-not-allowed">
                                Volunteer Nonaktif
                            </span>
                        @endif

                        <a href="{{ route('event.show', $event) }}"
                            class="inline-flex items-center justify-center bg-slate-900 dark:bg-slate-100 hover:bg-slate-700 dark:hover:bg-slate-200 text-white dark:text-slate-900 py-3 rounded-lg text-sm font-bold transition-all">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            </article>
        @empty
            <div
                class="md:col-span-2 lg:col-span-3 border-2 border-dashed border-slate-200 dark:border-slate-800 rounded-2xl flex flex-col items-center justify-center p-8 text-center bg-slate-50/50 dark:bg-slate-900/50">
                <div class="size-16 bg-slate-100 dark:bg-slate-800 rounded-full flex items-center justify-center mb-4">
                    <span class="material-symbols-outlined text-slate-400 text-3xl">event_busy</span>
                </div>
                <h3 class="text-lg font-bold text-slate-700 dark:text-slate-300 mb-2">Belum ada event aktif</h3>
                <p class="text-slate-500 dark:text-slate-400 text-sm">Silakan kembali lagi nanti atau pilih kategori lain.
                </p>
            </div>
        @endforelse
    </div>

    <div class="mt-6">
        {{ $events->links() }}
    </div>
@endsection
