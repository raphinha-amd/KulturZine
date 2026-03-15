@extends('layout.app')

@section('content')
    <div class="flex flex-col lg:flex-row min-h-screen">
        <div
            class="lg:hidden sticky top-16 z-30 bg-white/80 dark:bg-slate-900/80 backdrop-blur-md border-b rounded-lg border-slate-200 dark:border-slate-800 p-4 flex justify-between items-center">
            <span class="text-sm font-bold text-slate-900 dark:text-white uppercase tracking-wider">Katalog Zine</span>
            <button id="filter-open"
                class="flex items-center gap-2 bg-primary text-white px-4 py-2 rounded-lg text-sm font-bold shadow-md">
                <span class="material-symbols-outlined text-sm">filter_list</span>
                Filter & Kategori
            </button>
        </div>
        <div id="filter-overlay" class="fixed inset-0 z-30 hidden bg-black/40 lg:hidden"></div>

        <aside id="sidebar-filter"
            class="fixed inset-y-0 left-0 z-40 w-72 transform -translate-x-full transition-transform duration-300 lg:translate-x-0 lg:static lg:flex lg:w-72 lg:h-screen lg:top-0 flex-col border-r border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-6 overflow-y-auto">

            <button id="filter-close" class="lg:hidden absolute top-4 right-4 text-slate-400">
                <span class="material-symbols-outlined">close</span>
            </button>

            <div class="flex flex-col gap-8 pt-12 lg:pt-0">
                <div>
                    <h3 class="text-slate-900 dark:text-slate-100 text-sm font-bold uppercase tracking-wider mb-4">Kategori
                    </h3>
                    <nav class="flex flex-col gap-1">
                        <a class="flex items-center justify-between gap-3 px-3 py-2.5 rounded-lg {{ !$selectedCategory ? 'bg-primary/10 text-primary font-semibold' : 'text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800' }} transition-colors"
                            href="{{ route('zine.catalog', array_merge(request()->except(['page', 'category']), ['sort' => $sort])) }}">
                            <span class="text-sm">Semua Zine</span>
                        </a>

                        @foreach ($categories as $category)
                            <a class="flex items-center justify-between gap-3 px-3 py-2.5 rounded-lg {{ $selectedCategory === $category->slug ? 'bg-primary/10 text-primary font-semibold' : 'text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800' }} transition-colors"
                                href="{{ route('zine.catalog', array_merge(request()->except(['page', 'category']), ['category' => $category->slug, 'sort' => $sort])) }}">
                                <span class="text-sm">{{ $category->zine_category }}</span>
                                <span class="text-xs">{{ $category->zines_count }}</span>
                            </a>
                        @endforeach
                    </nav>

                    <div class="mt-4 flex items-center gap-4 text-sm">
                        @if ($showAllCategories)
                            <a href="{{ route('zine.catalog', request()->except(['page', 'show_all_categories'])) }}"
                                class="text-primary font-semibold hover:underline">
                                Sembunyikan sebagian kategori
                            </a>
                        @else
                            <a href="{{ route('zine.catalog', array_merge(request()->except(['page']), ['show_all_categories' => 1])) }}"
                                class="text-primary font-semibold hover:underline">
                                Lihat semua kategori
                            </a>
                        @endif

                        @if ($selectedCategory)
                            <a href="{{ route('zine.catalog', request()->except(['page', 'category'])) }}"
                                class="text-slate-500 hover:text-primary">
                                Reset kategori
                            </a>
                        @endif
                    </div>
                </div>

                <div>
                    <h3 class="text-slate-900 dark:text-slate-100 text-xs font-black uppercase tracking-[0.2em] mb-5">Tag
                    </h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach ($tags as $tag)
                            <a href="{{ route('zine.catalog', array_merge(request()->except(['page', 'tag']), ['tag' => $tag->slug, 'sort' => $sort, 'show_all_tags' => $showAllTags ? 1 : null])) }}"
                                class="px-3 py-1.5 rounded-full text-xs font-medium transition-colors {{ $selectedTagSlug === $tag->slug ? 'bg-primary/10 text-primary' : 'bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 hover:bg-primary/10 hover:text-primary' }}">
                                {{ $tag->zine_tag }}
                            </a>
                        @endforeach
                    </div>

                    <div class="mt-4 flex items-center gap-4 text-sm">
                        @if ($showAllTags)
                            <a href="{{ route('zine.catalog', request()->except(['page', 'show_all_tags'])) }}"
                                class="text-primary font-semibold hover:underline">
                                Sembunyikan sebagian tag
                            </a>
                        @else
                            <a href="{{ route('zine.catalog', array_merge(request()->except(['page']), ['show_all_tags' => 1])) }}"
                                class="text-primary font-semibold hover:underline">
                                Lihat semua tag
                            </a>
                        @endif

                        @if ($selectedTag)
                            <a href="{{ route('zine.catalog', request()->except(['page', 'tag'])) }}"
                                class="text-slate-500 hover:text-primary">
                                Reset tag
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </aside>

        <main class="flex-1 p-6 lg:p-10 overflow-y-auto">
            <div class="max-w-6xl mx-auto">
                <div class="mb-10">
                    <div class="flex items-center gap-2 text-slate-500 text-sm mb-4">
                        <a class="hover:text-primary" href="/">Beranda</a>
                        <span class="material-symbols-outlined text-xs">chevron_right</span>
                        <span class="text-slate-900 dark:text-slate-100 font-medium">Katalog Zine</span>
                    </div>
                    <h1 class="text-4xl font-black text-slate-900 dark:text-slate-100 tracking-tight mb-3">Jelajahi Katalog
                        Zine</h1>
                    <p class="text-lg text-slate-600 dark:text-slate-400">Temukan kisah, seni, dan ide dari komunitas kami.
                    </p>
                </div>

                <div class="flex flex-wrap items-center justify-between gap-4 pb-6">
                    <div class="text-sm text-slate-500 dark:text-slate-400">
                        Menampilkan {{ $zines->count() }} dari {{ $zines->total() }} zine
                        @if ($selectedTag)
                            <span class="font-semibold text-primary">(tag: {{ $selectedTag->zine_tag }})</span>
                        @endif
                    </div>

                    <form method="GET" action="{{ route('zine.catalog') }}" class="flex items-center gap-3">
                        @if ($selectedCategory)
                            <input type="hidden" name="category" value="{{ $selectedCategory }}">
                        @endif
                        @if ($selectedTagSlug)
                            <input type="hidden" name="tag" value="{{ $selectedTagSlug }}">
                        @endif
                        @if ($showAllTags)
                            <input type="hidden" name="show_all_tags" value="1">
                        @endif
                        @if ($showAllCategories)
                            <input type="hidden" name="show_all_categories" value="1">
                        @endif

                        <label for="sort-select"
                            class="text-sm font-medium text-slate-700 dark:text-slate-300 whitespace-nowrap">Sortir:</label>
                        <select id="sort-select" name="sort"
                            class="block rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-900 text-slate-700 dark:text-slate-100 py-2 text-sm focus:ring-2 focus:ring-primary focus:border-primary transition appearance-none"
                            onchange="this.form.submit()">
                            <option value="newest" {{ $sort === 'newest' ? 'selected' : '' }}>Terbaru</option>
                            <option value="oldest" {{ $sort === 'oldest' ? 'selected' : '' }}>Terlama</option>
                        </select>
                    </form>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    @forelse ($zines as $zine)
                        <div
                            class="group bg-white dark:bg-slate-900 rounded-xl overflow-hidden border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                            <div class="aspect-[3/4] overflow-hidden bg-slate-200 relative">
                                <img alt="{{ $zine->title }} cover"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    src="{{ $zine->featured_image_url ?? 'https://placehold.co/800x1200?text=Zine' }}" />
                                @if ($zine->category)
                                    <div class="absolute top-3 left-3 flex gap-1">
                                        <span
                                            class="bg-primary/90 backdrop-blur px-2 py-1 rounded text-[10px] font-bold text-white uppercase">{{ $zine->category->zine_category }}</span>
                                    </div>
                                @endif
                            </div>
                            <div class="p-5">
                                <h3
                                    class="text-lg font-bold text-slate-900 dark:text-slate-100 mb-1 group-hover:text-primary transition-colors">
                                    {{ $zine->title }}
                                </h3>
                                <p class="text-xs text-slate-500 mb-3">by {{ $zine->author }}</p>
                                <p class="text-sm text-slate-600 dark:text-slate-400 line-clamp-2 mb-4">
                                    {{ $zine->description ?: 'Belum ada deskripsi untuk zine ini.' }}
                                </p>
                                <div class="flex flex-wrap gap-2 mb-6">
                                    @forelse ($zine->tags->take(3) as $tag)
                                        <span
                                            class="text-[10px] font-bold bg-slate-100 dark:bg-slate-800 px-2 py-1 rounded text-slate-500">{{ $tag->zine_tag }}</span>
                                    @empty
                                        <span
                                            class="text-[10px] font-bold bg-slate-100 dark:bg-slate-800 px-2 py-1 rounded text-slate-500">Tanpa
                                            tag</span>
                                    @endforelse
                                </div>
                                <div class="flex gap-2">
                                    <a href="{{ route('zine.show', $zine->slug) }}"
                                        class="flex-1 flex items-center justify-center gap-2 bg-primary text-white py-2 rounded-lg text-sm font-bold hover:bg-primary/90 transition-all">
                                        <span class="material-symbols-outlined text-sm">visibility</span>
                                        Baca
                                    </a>
                                    <a href="{{ $zine->link_pdf }}"
                                        class="px-3 py-2 border border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-300 rounded-lg hover:bg-slate-50 dark:hover:bg-slate-800 transition-all"
                                        download>
                                        <span class="material-symbols-outlined text-sm">download</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div
                            class="col-span-full rounded-xl border border-dashed border-slate-300 dark:border-slate-700 p-10 text-center">
                            <p class="text-slate-500 dark:text-slate-400">Belum ada zine untuk filter yang dipilih.</p>
                        </div>
                    @endforelse
                </div>

                <div class="mt-12">
                    {{ $zines->onEachSide(1)->links() }}
                </div>
            </div>
        </main>
    </div>

    <script>
        const filterBtn = document.getElementById('filter-open');
        const closeBtn = document.getElementById('filter-close');
        const sidebar = document.getElementById('sidebar-filter');
        const overlay = document.getElementById('filter-overlay');

        const openSidebar = () => {
            if (!sidebar || !overlay) return;
            sidebar.classList.remove('-translate-x-full');
            overlay.classList.remove('hidden');
        };

        const closeSidebar = () => {
            if (!sidebar || !overlay) return;
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
        };

        if (filterBtn) filterBtn.addEventListener('click', openSidebar);
        if (closeBtn) closeBtn.addEventListener('click', closeSidebar);
        if (overlay) overlay.addEventListener('click', closeSidebar);
    </script>
@endsection
