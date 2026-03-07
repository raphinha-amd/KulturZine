@extends('layout.app')
@section('content')
    <div class="flex flex-col lg:flex-row min-h-screen ">

        <div
            class="lg:hidden sticky top-16 z-30 bg-white/80 dark:bg-slate-900/80 backdrop-blur-md border-b border-slate-200 dark:border-slate-800 p-4 flex justify-between items-center">
            <span class="text-sm font-bold text-slate-900 dark:text-white uppercase tracking-wider">Catalog</span>
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

            <div class="flex flex-col gap-8">
                <div>
                    <h3 class="text-slate-900 dark:text-slate-100 text-sm font-bold uppercase tracking-wider mb-4">
                        Categories</h3>
                    <nav class="flex flex-col gap-1">
                        <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-primary/10 text-primary font-semibold"
                            href="#">
                            <span class="material-symbols-outlined text-[20px]">grid_view</span>
                            <span class="text-sm">All Zines</span>
                        </a>
                        <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors"
                            href="#">
                            <span class="material-symbols-outlined text-[20px]">palette</span>
                            <span class="text-sm">Art &amp; Illustration</span>
                        </a>
                        <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors"
                            href="#">
                            <span class="material-symbols-outlined text-[20px]">edit_note</span>
                            <span class="text-sm">Poetry</span>
                        </a>
                        <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors"
                            href="#">
                            <span class="material-symbols-outlined text-[20px]">campaign</span>
                            <span class="text-sm">Political</span>
                        </a>
                        <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors"
                            href="#">
                            <span class="material-symbols-outlined text-[20px]">face</span>
                            <span class="text-sm">Perzines</span>
                        </a>
                        <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors"
                            href="#">
                            <span class="material-symbols-outlined text-[20px]">build</span>
                            <span class="text-sm">DIY &amp; Tutorials</span>
                        </a>
                    </nav>
                </div>

                <div>
                    <h3 class="text-slate-900 dark:text-slate-100 text-xs font-black uppercase tracking-[0.2em] mb-5">
                        Popular Themes</h3>
                    <div class="flex flex-wrap gap-2">
                        <button
                            class="px-3 py-1.5 rounded-full bg-slate-100 dark:bg-slate-800 text-xs font-medium text-slate-600 dark:text-slate-400 hover:bg-primary/10 hover:text-primary transition-colors">Sci-Fi</button>
                        <button
                            class="px-3 py-1.5 rounded-full bg-slate-100 dark:bg-slate-800 text-xs font-medium text-slate-600 dark:text-slate-400 hover:bg-primary/10 hover:text-primary transition-colors">Mental
                            Health</button>
                        <button
                            class="px-3 py-1.5 rounded-full bg-slate-100 dark:bg-slate-800 text-xs font-medium text-slate-600 dark:text-slate-400 hover:bg-primary/10 hover:text-primary transition-colors">Music</button>
                        <button
                            class="px-3 py-1.5 rounded-full bg-slate-100 dark:bg-slate-800 text-xs font-medium text-slate-600 dark:text-slate-400 hover:bg-primary/10 hover:text-primary transition-colors">Photography</button>
                        <button
                            class="px-3 py-1.5 rounded-full bg-slate-100 dark:bg-slate-800 text-xs font-medium text-slate-600 dark:text-slate-400 hover:bg-primary/10 hover:text-primary transition-colors">Cyberpunk</button>
                    </div>
                </div>

                <div class="mt-auto pt-6">
                    <div
                        class="p-5 rounded-2xl bg-slate-50 dark:bg-slate-800/50 border border-slate-100 dark:border-slate-800">
                        <p class="text-[10px] font-black text-primary uppercase mb-2">New Release</p>
                        <p class="text-sm font-bold text-slate-800 dark:text-slate-200 mb-3 leading-snug">Learn how to
                            bind
                            your own zines at home!</p>
                        <button
                            class="w-full py-2.5 bg-[#1d81e2] text-white text-xs font-black rounded-lg shadow-lg shadow-blue-500/20">Get
                            Guide</button>
                    </div>
                </div>
            </div>
        </aside>
        <!-- Main Content Area -->
        <main class="flex-1 p-6 lg:p-10 overflow-y-auto">
            <div class="max-w-6xl mx-auto">
                <div class="mb-10">
                    <div class="flex items-center gap-2 text-slate-500 text-sm mb-4">
                        <a class="hover:text-primary" href="#">Home</a>
                        <span class="material-symbols-outlined text-xs">chevron_right</span>
                        <span class="text-slate-900 dark:text-slate-100 font-medium">Catalog</span>
                    </div>
                    <h1 class="text-4xl font-black text-slate-900 dark:text-slate-100 tracking-tight mb-3">Explore the
                        Catalog
                    </h1>
                    <p class="text-lg text-slate-600 dark:text-slate-400">Discover hand-crafted stories, art, and radical
                        ideas
                        from our global community.</p>
                </div>
                <!-- Filter Chips (Mobile/Tablet Friendly) -->
                <div class="flex items-center gap-3 overflow-x-auto pb-6 scrollbar-hide">
                    <button
                        class="flex items-center gap-2 px-4 py-2 rounded-lg bg-slate-100 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 whitespace-nowrap text-sm font-medium">
                        <span>Sort: Popular</span>
                        <span class="material-symbols-outlined text-sm">keyboard_arrow_down</span>
                    </button>
                    <button
                        class="flex items-center gap-2 px-4 py-2 rounded-lg bg-slate-100 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 whitespace-nowrap text-sm font-medium">
                        <span>Format: Digital</span>
                        <span class="material-symbols-outlined text-sm">keyboard_arrow_down</span>
                    </button>
                    <button
                        class="flex items-center gap-2 px-4 py-2 rounded-lg bg-slate-100 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 whitespace-nowrap text-sm font-medium">
                        <span>Year: 2024</span>
                        <span class="material-symbols-outlined text-sm">keyboard_arrow_down</span>
                    </button>
                </div>
                <!-- Zine Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                    <!-- Zine Card 6 -->
                    <div
                        class="group bg-white dark:bg-slate-900 rounded-xl overflow-hidden border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="aspect-[3/4] overflow-hidden bg-slate-200 relative">
                            <img alt="Tech zine cover"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                data-alt="Digital grid pattern zine cover"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuB0PGpSSg5rOGd-oD1hPhbsYoghDy2364gEkwZ-YT9NfA-GcIjkkNYDVL8ZspNNXWhxal8ELdBxa0ZHxqTl_u76PZJaSV8sT0PelFJPDTO3U09uid9y1jMxR-A5obgeZ4Dr12fFBZ2DBBMjfWoaXL1Qbc48-TnH74uwyZEIW2H5ivcJPCpVeOSM4BanVmfxdzAKKc24HYpLp5blxwMDz-TkKX5qhkeqTEX5nZLvuMCIqaHH5FTdRkEXgnSUu_Amih3v8tMwiAwoR8AH" />
                            <div class="absolute top-3 left-3 flex gap-1">
                                <span
                                    class="bg-violet-500/90 backdrop-blur px-2 py-1 rounded text-[10px] font-bold text-white uppercase">Tech</span>
                            </div>
                        </div>
                        <div class="p-5">
                            <h3
                                class="text-lg font-bold text-slate-900 dark:text-slate-100 mb-1 group-hover:text-primary transition-colors">
                                Offline Glitch</h3>
                            <p class="text-xs text-slate-500 mb-3">by Pixel Drifter • 14 pages</p>
                            <p class="text-sm text-slate-600 dark:text-slate-400 line-clamp-2 mb-4">
                                An experimental zine exploring digital decay and the aesthetics of low-fidelity computing.
                            </p>
                            <div class="flex flex-wrap gap-2 mb-6">
                                <span
                                    class="text-[10px] font-bold bg-slate-100 dark:bg-slate-800 px-2 py-1 rounded text-slate-500">Experimental</span>
                                <span
                                    class="text-[10px] font-bold bg-slate-100 dark:bg-slate-800 px-2 py-1 rounded text-slate-500">Glitch
                                    Art</span>
                            </div>
                            <div class="flex gap-2">
                                <a href="/katalog-zine/detail-zine"
                                    class="flex-1 flex items-center justify-center gap-2 bg-primary text-white py-2 rounded-lg text-sm font-bold hover:bg-primary/90 transition-all">
                                    <span class="material-symbols-outlined text-sm">visibility</span>
                                    Read
                                </a>
                                <button
                                    class="px-3 py-2 border border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-300 rounded-lg hover:bg-slate-50 dark:hover:bg-slate-800 transition-all">
                                    <span class="material-symbols-outlined text-sm">download</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Zine Card 6 -->
                    <div
                        class="group bg-white dark:bg-slate-900 rounded-xl overflow-hidden border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="aspect-[3/4] overflow-hidden bg-slate-200 relative">
                            <img alt="Tech zine cover"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                data-alt="Digital grid pattern zine cover"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuB0PGpSSg5rOGd-oD1hPhbsYoghDy2364gEkwZ-YT9NfA-GcIjkkNYDVL8ZspNNXWhxal8ELdBxa0ZHxqTl_u76PZJaSV8sT0PelFJPDTO3U09uid9y1jMxR-A5obgeZ4Dr12fFBZ2DBBMjfWoaXL1Qbc48-TnH74uwyZEIW2H5ivcJPCpVeOSM4BanVmfxdzAKKc24HYpLp5blxwMDz-TkKX5qhkeqTEX5nZLvuMCIqaHH5FTdRkEXgnSUu_Amih3v8tMwiAwoR8AH" />
                            <div class="absolute top-3 left-3 flex gap-1">
                                <span
                                    class="bg-violet-500/90 backdrop-blur px-2 py-1 rounded text-[10px] font-bold text-white uppercase">Tech</span>
                            </div>
                        </div>
                        <div class="p-5">
                            <h3
                                class="text-lg font-bold text-slate-900 dark:text-slate-100 mb-1 group-hover:text-primary transition-colors">
                                Offline Glitch</h3>
                            <p class="text-xs text-slate-500 mb-3">by Pixel Drifter • 14 pages</p>
                            <p class="text-sm text-slate-600 dark:text-slate-400 line-clamp-2 mb-4">
                                An experimental zine exploring digital decay and the aesthetics of low-fidelity computing.
                            </p>
                            <div class="flex flex-wrap gap-2 mb-6">
                                <span
                                    class="text-[10px] font-bold bg-slate-100 dark:bg-slate-800 px-2 py-1 rounded text-slate-500">Experimental</span>
                                <span
                                    class="text-[10px] font-bold bg-slate-100 dark:bg-slate-800 px-2 py-1 rounded text-slate-500">Glitch
                                    Art</span>
                            </div>
                            <div class="flex gap-2">
                                <button
                                    class="flex-1 flex items-center justify-center gap-2 bg-primary text-white py-2 rounded-lg text-sm font-bold hover:bg-primary/90 transition-all">
                                    <span class="material-symbols-outlined text-sm">visibility</span>
                                    Read
                                </button>
                                <button
                                    class="px-3 py-2 border border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-300 rounded-lg hover:bg-slate-50 dark:hover:bg-slate-800 transition-all">
                                    <span class="material-symbols-outlined text-sm">download</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Zine Card 6 -->
                    <div
                        class="group bg-white dark:bg-slate-900 rounded-xl overflow-hidden border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="aspect-[3/4] overflow-hidden bg-slate-200 relative">
                            <img alt="Tech zine cover"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                data-alt="Digital grid pattern zine cover"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuB0PGpSSg5rOGd-oD1hPhbsYoghDy2364gEkwZ-YT9NfA-GcIjkkNYDVL8ZspNNXWhxal8ELdBxa0ZHxqTl_u76PZJaSV8sT0PelFJPDTO3U09uid9y1jMxR-A5obgeZ4Dr12fFBZ2DBBMjfWoaXL1Qbc48-TnH74uwyZEIW2H5ivcJPCpVeOSM4BanVmfxdzAKKc24HYpLp5blxwMDz-TkKX5qhkeqTEX5nZLvuMCIqaHH5FTdRkEXgnSUu_Amih3v8tMwiAwoR8AH" />
                            <div class="absolute top-3 left-3 flex gap-1">
                                <span
                                    class="bg-violet-500/90 backdrop-blur px-2 py-1 rounded text-[10px] font-bold text-white uppercase">Tech</span>
                            </div>
                        </div>
                        <div class="p-5">
                            <h3
                                class="text-lg font-bold text-slate-900 dark:text-slate-100 mb-1 group-hover:text-primary transition-colors">
                                Offline Glitch</h3>
                            <p class="text-xs text-slate-500 mb-3">by Pixel Drifter • 14 pages</p>
                            <p class="text-sm text-slate-600 dark:text-slate-400 line-clamp-2 mb-4">
                                An experimental zine exploring digital decay and the aesthetics of low-fidelity computing.
                            </p>
                            <div class="flex flex-wrap gap-2 mb-6">
                                <span
                                    class="text-[10px] font-bold bg-slate-100 dark:bg-slate-800 px-2 py-1 rounded text-slate-500">Experimental</span>
                                <span
                                    class="text-[10px] font-bold bg-slate-100 dark:bg-slate-800 px-2 py-1 rounded text-slate-500">Glitch
                                    Art</span>
                            </div>
                            <div class="flex gap-2">
                                <button
                                    class="flex-1 flex items-center justify-center gap-2 bg-primary text-white py-2 rounded-lg text-sm font-bold hover:bg-primary/90 transition-all">
                                    <span class="material-symbols-outlined text-sm">visibility</span>
                                    Read
                                </button>
                                <button
                                    class="px-3 py-2 border border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-300 rounded-lg hover:bg-slate-50 dark:hover:bg-slate-800 transition-all">
                                    <span class="material-symbols-outlined text-sm">download</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pagination -->
                <div class="flex justify-center mt-16 mb-10">
                    <nav class="flex items-center gap-1">
                        <button class="p-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-400">
                            <span class="material-symbols-outlined">chevron_left</span>
                        </button>
                        <button class="size-10 rounded-lg bg-primary text-white font-bold text-sm">1</button>
                        <button
                            class="size-10 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-400 font-bold text-sm">2</button>
                        <button
                            class="size-10 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-400 font-bold text-sm">3</button>
                        <span class="px-2 text-slate-400">...</span>
                        <button
                            class="size-10 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-400 font-bold text-sm">12</button>
                        <button class="p-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-400">
                            <span class="material-symbols-outlined">chevron_right</span>
                        </button>
                    </nav>
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
