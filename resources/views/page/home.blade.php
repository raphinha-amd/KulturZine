@extends('layout.app')

@section('content')
    @php
        $featuredImageUrl = $featuredZine?->featured_image_url ?? 'https://placehold.co/1200x800?text=Featured+Zine';
    @endphp

    <section class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-24">
        <div class="flex flex-col gap-8">
            <div class="space-y-4">
                <span
                    class="inline-block px-3 py-1 bg-primary/10 text-primary text-xs font-bold uppercase tracking-wider rounded-full">Komunitas
                    Kreatif Independen</span>
                <h1 class="text-5xl md:text-6xl font-extrabold leading-[1.1] text-slate-900 dark:text-slate-50">
                    Ruang Baca Kolektif untuk <span class="text-primary">Suara Independen</span>
                </h1>
                <p class="text-lg text-slate-600 dark:text-slate-400 max-w-xl leading-relaxed">
                    Temukan berbagai zine, artikel, dan event dari komunitas kreatif. Semua konten di halaman ini ditarik
                    langsung dari database terbaru.
                </p>
            </div>
            <div class="flex flex-wrap gap-4">
                <a href="{{ route('zine.catalog') }}"
                    class="bg-primary text-white px-8 py-4 rounded-xl font-bold text-lg hover:shadow-lg hover:shadow-primary/20 transition-all flex items-center gap-2">
                    <span class="material-symbols-outlined">auto_stories</span>
                    Baca Zine
                </a>
                <a href="{{ route('event.index') }}"
                    class="bg-white dark:bg-slate-800 border-2 border-slate-100 dark:border-slate-700 text-slate-900 dark:text-slate-100 px-8 py-4 rounded-xl font-bold text-lg hover:bg-slate-50 dark:hover:bg-slate-700 transition-all">
                    Lihat Event
                </a>
            </div>
        </div>
        <div class="relative">
            <div class="absolute -top-4 -left-4 w-24 h-24 bg-primary/10 rounded-full blur-2xl"></div>
            <div class="absolute -bottom-4 -right-4 w-32 h-32 bg-primary/20 rounded-full blur-3xl"></div>
            <div
                class="relative aspect-[4/3] rounded-2xl overflow-hidden shadow-2xl border-4 border-white dark:border-slate-800">
                <div class="w-full h-full bg-cover bg-center"
                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCAw7JB4U3DCFD_Z8rPRawEb2GK7by0KlUWDfpu9ecEvVCaf29ExslcVMio-58HIPY4JENRyNGiEcjhTeZ4uBfwOCJKO4zYzsGcYpWQ9k0q-7NmknHBB1fUC2ypa2iwuj89Rr2c4It-h1-_MjoFGFgYSZyaVOsGEFa0SqN5c9UArDDgzgOd_hnFn3d0rtYPZTDlKLiXr7Gd0DnGph7SJT5xxBG71Q0J2ITrVbJvfhgL914LCarYCS4WLakjxzu-DJ7J8MTmWBHT2Zp4')">
                </div>
            </div>
        </div>
    </section>

    <section class="mb-24">
        <div class="flex items-center justify-between mb-8">
            <h2 class="text-3xl font-bold tracking-tight">Zine Pilihan Minggu Ini</h2>
            <a class="text-primary font-semibold flex items-center gap-1 hover:underline"
                href="{{ route('zine.catalog') }}">Lihat Semua
                <span class="material-symbols-outlined text-sm">arrow_forward</span></a>
        </div>

        @if ($featuredZine)
            <div
                class="bg-white dark:bg-slate-800 rounded-2xl overflow-hidden shadow-xl border border-slate-100 dark:border-slate-700 flex flex-col md:flex-row">
                <div class="md:w-1/2 aspect-[16/10] md:aspect-auto">
                    <div class="w-full h-full bg-cover bg-center" style="background-image: url('{{ $featuredImageUrl }}')">
                    </div>
                </div>
                <div class="md:w-1/2 p-8 md:p-12 flex flex-col justify-center gap-6">
                    <div class="space-y-4">
                        <div class="flex gap-2 flex-wrap">
                            @if ($featuredZine->category)
                                <span
                                    class="px-2 py-1 bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-300 text-[10px] font-bold uppercase rounded">{{ $featuredZine->category->zine_category }}</span>
                            @endif
                            @foreach ($featuredZine->tags->take(2) as $tag)
                                <span
                                    class="px-2 py-1 bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-300 text-[10px] font-bold uppercase rounded">{{ $tag->zine_tag }}</span>
                            @endforeach
                        </div>
                        <h3 class="text-3xl font-extrabold">{{ $featuredZine->title }}</h3>
                        <p class="text-slate-600 dark:text-slate-400 leading-relaxed text-lg">
                            {{ Illuminate\Support\Str::limit(strip_tags((string) $featuredZine->description), 170) }}
                        </p>
                        <div class="flex items-center gap-3">
                            <div>
                                <p class="font-bold text-sm">{{ $featuredZine->author }}</p>
                                <p class="text-xs text-slate-500">
                                    {{ $featuredZine->created_at?->translatedFormat('d M Y') }}</p>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('zine.show', $featuredZine) }}"
                        class="w-fit bg-primary text-white px-6 py-3 rounded-lg font-bold hover:bg-primary/90 transition-all flex items-center gap-2">
                        <span class="material-symbols-outlined">menu_book</span>
                        Baca Selengkapnya
                    </a>
                </div>
            </div>
        @else
            <div
                class="rounded-2xl border border-dashed border-slate-300 dark:border-slate-700 p-8 text-center text-slate-500">
                Belum ada zine untuk ditampilkan.
            </div>
        @endif
    </section>

    <section class="mb-24">
        <h2 class="text-3xl font-bold tracking-tight mb-10 text-center">Eksplorasi Kategori</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            @forelse ($zineCategories as $category)
                <a class="group relative overflow-hidden rounded-2xl aspect-square bg-slate-900"
                    href="{{ route('zine.catalog', ['category' => $category->slug]) }}">
                    <div
                        class="absolute inset-0 opacity-70 group-hover:scale-110 transition-transform duration-500 bg-gradient-to-br from-primary to-slate-900">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 to-transparent"></div>
                    <div class="absolute bottom-6 left-6">
                        <h4 class="text-white text-xl font-bold">{{ $category->zine_category }}</h4>
                        <p class="text-white/70 text-sm">{{ $category->zines_count }} zine</p>
                    </div>
                </a>
            @empty
                <div class="col-span-full text-center text-slate-500">Belum ada kategori zine.</div>
            @endforelse
        </div>
    </section>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
        <div class="lg:col-span-2 space-y-8">
            <div class="flex items-center justify-between">
                <h2 class="text-2xl font-bold tracking-tight">Catatan Redaksi</h2>
                <a class="text-primary text-sm font-bold" href="{{ route('article.index') }}">Semua Artikel</a>
            </div>
            <div class="space-y-6">
                @forelse ($latestPosts as $post)
                    <article
                        class="flex gap-6 group cursor-pointer {{ !$loop->first ? 'border-t border-slate-100 dark:border-slate-800 pt-6' : '' }}">
                        <div class="w-32 h-32 flex-shrink-0 overflow-hidden rounded-xl bg-slate-100">
                            <div class="w-full h-full bg-cover bg-center group-hover:scale-110 transition-transform"
                                style="background-image: url('{{ $post->thumbnail_url ?? 'https://placehold.co/300x300?text=Article' }}')">
                            </div>
                        </div>
                        <div class="space-y-2">
                            <p class="text-primary text-[10px] font-black uppercase tracking-widest">
                                {{ $post->category->title ?? 'Artikel' }}</p>
                            <a href="{{ route('article.show', $post) }}">
                                <h3 class="text-xl font-bold group-hover:text-primary transition-colors">
                                    {{ $post->title }}</h3>
                            </a>
                            <p class="text-slate-400 text-xs">{{ $post->user->name ?? 'Unknown Author' }}</p>

                            <p class="text-slate-700 text-sm line-clamp-2">
                                {{ Illuminate\Support\Str::limit(strip_tags((string) $post->content), 120) }}</p>
                            <p class="text-slate-400 text-xs">{{ $post->created_at?->translatedFormat('d M Y') }}</p>
                        </div>
                    </article>
                @empty
                    <p class="text-slate-500">Belum ada artikel terbaru.</p>
                @endforelse
            </div>
        </div>

        <div class="space-y-8">
            <h2 class="text-2xl font-bold tracking-tight">Agenda Mendatang</h2>
            <div class="space-y-4">
                @forelse ($upcomingEvents as $event)
                    <div
                        class="{{ $loop->first ? 'bg-primary/5 dark:bg-primary/10 border-primary/10' : 'bg-slate-50 dark:bg-slate-800/50 border-slate-100 dark:border-slate-800' }} p-5 rounded-2xl border">
                        <div class="flex gap-4">
                            <div
                                class="{{ $loop->first ? 'bg-primary text-white' : 'bg-slate-200 dark:bg-slate-700 text-slate-600 dark:text-slate-300' }} w-14 h-14 rounded-lg flex flex-col items-center justify-center flex-shrink-0">
                                <span
                                    class="text-lg font-bold">{{ optional($event->start_date)->translatedFormat('d') ?? '-' }}</span>
                                <span
                                    class="text-[10px] font-bold uppercase">{{ optional($event->start_date)->translatedFormat('M') ?? '-' }}</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900 dark:text-slate-100">{{ $event->name_event }}</h4>
                                <p class="text-sm text-slate-500 mb-2">
                                    {{ optional($event->start_date)->translatedFormat('H:i') ?? '-' }} -
                                    {{ $event->location ?? 'Lokasi menyusul' }}
                                </p>
                                <a href="{{ route('event.show', $event) }}"
                                    class="text-primary text-xs font-bold flex items-center gap-1">Lihat Detail
                                    <span class="material-symbols-outlined text-xs">arrow_outward</span></a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-slate-500">Belum ada event mendatang.</p>
                @endforelse
            </div>
            <div class="bg-slate-900 dark:bg-primary p-6 rounded-2xl text-white relative overflow-hidden">
                <div class="relative z-10">
                    <h4 class="text-xl font-bold mb-2">Punya karya zine?</h4>
                    <p class="text-white/80 text-sm mb-4">Ayo bagikan perspektifmu kepada ribuan pembaca lainnya.</p>
                    <a href="{{ route('zine.catalog') }}"
                        class="inline-flex items-center justify-center bg-white text-slate-900 px-4 py-2 rounded-lg text-sm font-bold w-full">Jelajahi
                        Katalog</a>
                </div>
                <span
                    class="material-symbols-outlined absolute -bottom-4 -right-4 text-white/10 text-9xl">upload_file</span>
            </div>
        </div>
    </div>
@endsection
