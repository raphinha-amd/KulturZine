@extends('layout.app')

@section('content')
    @php
        $image = $event->featured_image;
        $isExternalImage = $image && Illuminate\Support\Str::startsWith($image, 'http');
        $imageUrl = $image
            ? ($isExternalImage
                ? $image
                : asset('storage/' . ltrim($image, '/')))
            : 'https://placehold.co/1600x700?text=Event+Detail';
    @endphp

    <div class="relative w-full aspect-[21/9] rounded-xl overflow-hidden mb-8 shadow-sm">
        <img alt="{{ $event->name_event }}" class="w-full h-full object-cover" src="{{ $imageUrl }}" />
        <div
            class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent flex flex-col justify-end p-8">
            <span class="bg-primary text-white px-3 py-1 rounded-full text-xs font-bold w-fit mb-3 tracking-wider uppercase">
                {{ $event->category->name_category ?? 'Uncategorized' }}
            </span>
            <h1 class="text-white text-3xl md:text-5xl font-extrabold tracking-tight">{{ $event->name_event }}</h1>
            <p class="text-slate-200 mt-2 text-lg">
                {{ Illuminate\Support\Str::limit(strip_tags((string) $event->description), 150) }}
            </p>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <div class="lg:col-span-2 space-y-10">
            <section>
                <div class="flex flex-wrap items-center gap-3 mb-4 text-sm text-slate-500 dark:text-slate-400">
                    <a href="{{ route('event.index') }}" class="hover:text-primary transition-colors">Event</a>
                    <span>/</span>
                    <span>{{ $event->name_event }}</span>
                </div>

                <h2 class="text-2xl font-bold mb-4 text-slate-900 dark:text-white">Tentang Acara</h2>
                <div
                    class="text-slate-700 dark:text-slate-300 space-y-4 leading-relaxed prose dark:prose-invert max-w-none">
                    {!! $event->description ?: 'Deskripsi acara belum tersedia.' !!}
                </div>
            </section>

            <section>
                <h2 class="text-2xl font-bold mb-6 text-slate-900 dark:text-white">Informasi Event</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="p-5 rounded-xl bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800">
                        <p class="text-xs font-semibold uppercase tracking-wider text-slate-500 mb-2">Mulai</p>
                        <p class="text-lg font-bold text-slate-900 dark:text-white">
                            {{ optional($event->start_date)->translatedFormat('l, d F Y') ?? 'Belum dijadwalkan' }}
                        </p>
                        <p class="text-sm text-slate-500 mt-1">
                            {{ optional($event->start_date)->translatedFormat('H:i') ?? '-' }}
                        </p>
                    </div>
                    <div class="p-5 rounded-xl bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800">
                        <p class="text-xs font-semibold uppercase tracking-wider text-slate-500 mb-2">Selesai</p>
                        <p class="text-lg font-bold text-slate-900 dark:text-white">
                            {{ optional($event->end_date)->translatedFormat('l, d F Y') ?? 'Belum dijadwalkan' }}
                        </p>
                        <p class="text-sm text-slate-500 mt-1">
                            {{ optional($event->end_date)->translatedFormat('H:i') ?? '-' }}
                        </p>
                    </div>
                    <div
                        class="p-5 rounded-xl bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 md:col-span-2">
                        <p class="text-xs font-semibold uppercase tracking-wider text-slate-500 mb-2">Lokasi</p>
                        <p class="text-lg font-bold text-slate-900 dark:text-white">
                            {{ $event->location ?? 'Lokasi menyusul' }}</p>
                    </div>
                </div>
            </section>

            @if ($relatedEvents->isNotEmpty())
                <section>
                    <h2 class="text-2xl font-bold mb-6 text-slate-900 dark:text-white">Event Terkait</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @foreach ($relatedEvents as $relatedEvent)
                            <article
                                class="bg-white dark:bg-slate-900 p-5 rounded-xl border border-slate-100 dark:border-slate-800">
                                <p class="text-xs font-semibold uppercase tracking-wider text-primary mb-2">
                                    {{ $relatedEvent->category->name_category ?? 'Uncategorized' }}
                                </p>
                                <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">
                                    {{ $relatedEvent->name_event }}
                                </h3>
                                <p class="text-sm text-slate-500 mb-4">
                                    {{ optional($relatedEvent->start_date)->translatedFormat('d M Y') ?? '-' }}
                                    · {{ $relatedEvent->location ?? 'Lokasi menyusul' }}
                                </p>
                                <a href="{{ route('event.show', $relatedEvent) }}"
                                    class="text-primary font-semibold hover:underline">
                                    Lihat Detail
                                </a>
                            </article>
                        @endforeach
                    </div>
                </section>
            @endif
        </div>

        <div class="lg:col-span-1 space-y-6">
            <div
                class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-100 dark:border-slate-800 sticky top-24 shadow-sm">
                <div class="mb-6">
                    <p class="text-slate-500 text-sm font-semibold uppercase tracking-wider mb-1">Status Event</p>
                    <h3 class="text-3xl font-bold text-primary">{{ $event->is_active ? 'Aktif' : 'Tidak Aktif' }}</h3>
                    <p class="text-sm text-slate-500 mt-1">Detail lengkap untuk calon peserta dan volunteer</p>
                </div>

                <div class="space-y-4 mb-8">
                    <div class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-primary">calendar_today</span>
                        <div>
                            <p class="font-bold text-slate-900 dark:text-white">
                                {{ optional($event->start_date)->translatedFormat('d F Y') ?? 'Belum dijadwalkan' }}
                            </p>
                            <p class="text-sm text-slate-500">Tanggal mulai</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-primary">schedule</span>
                        <div>
                            <p class="font-bold text-slate-900 dark:text-white">
                                {{ optional($event->start_date)->translatedFormat('H:i') ?? '-' }} -
                                {{ optional($event->end_date)->translatedFormat('H:i') ?? '-' }}
                            </p>
                            <p class="text-sm text-slate-500">Waktu pelaksanaan</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-primary">location_on</span>
                        <div>
                            <p class="font-bold text-slate-900 dark:text-white">{{ $event->location ?? 'Lokasi menyusul' }}
                            </p>
                            <p class="text-sm text-slate-500">Lokasi acara</p>
                        </div>
                    </div>
                </div>

                <div class="space-y-3">
                    @if ($event->is_volunteer_active && $event->volunteer_link)
                        <a href="{{ $event->volunteer_link }}" target="_blank" rel="noopener noreferrer"
                            class="w-full inline-flex items-center justify-center py-4 bg-primary text-white font-bold rounded-xl hover:bg-primary/90 transition-all shadow-md">
                            Ikut Jadi Volunteer
                        </a>
                    @else
                        <span
                            class="w-full inline-flex items-center justify-center py-4 bg-slate-100 dark:bg-slate-800 text-slate-500 dark:text-slate-400 font-bold rounded-xl cursor-not-allowed">
                            Volunteer Nonaktif
                        </span>
                    @endif

                    <a href="{{ route('event.index') }}"
                        class="w-full inline-flex items-center justify-center py-4 bg-primary/10 text-primary font-bold rounded-xl hover:bg-primary/20 transition-all">
                        Kembali ke Daftar Event
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
