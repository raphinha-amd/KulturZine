@extends('layout.app')
@section('content')
    <!-- Main Content -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-20">
        <!-- Left Column: Image -->
        <div class="lg:col-span-5">
            <div class="sticky top-28">
                <div
                    class="group relative aspect-[3/4] w-full overflow-hidden rounded-xl shadow-2xl bg-slate-200 dark:bg-slate-800">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                        data-alt="Modern minimalist zine cover with abstract geometric patterns"
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDB2QE7LKw4M_00WbBgWnnFkMlLu5fJR4t9Y9DT0El9vUD_-1ZGkPddNhCDZHAJzY1_PwnciCBkTj5Dp5u6VGE_B2npZvw8a2brQ9-o2PdUKjAxdrM2yhHBW9vKrJklaBVjC-5KdQiP26oBKKky9Zo7KXgg8VGnxxsvK3fDMe8u63AUOhTCgAGDde7iiYWb-ShqvaiUFg-e4mGQUsrQjTadLRVwUWeF8VOUoeLPnHaTjpixZRBiQJQAORCLIdlujgrLlFr8OR5miHTF');">
                    </div>
                    <div class="absolute inset-0 ring-1 ring-inset ring-black/10 rounded-xl"></div>
                </div>
                <div class="mt-8 flex items-center justify-between px-2">
                    <div class="flex gap-4">
                        <button
                            class="flex items-center gap-2 text-slate-600 dark:text-slate-400 hover:text-primary transition-colors">
                            <span class="material-symbols-outlined">favorite</span>
                            <span class="text-sm font-semibold">1.2k</span>
                        </button>
                        <button
                            class="flex items-center gap-2 text-slate-600 dark:text-slate-400 hover:text-primary transition-colors">
                            <span class="material-symbols-outlined">share</span>
                            <span class="text-sm font-semibold">Share</span>
                        </button>
                    </div>
                    <button
                        class="flex items-center gap-2 text-slate-600 dark:text-slate-400 hover:text-primary transition-colors">
                        <span class="material-symbols-outlined">bookmark</span>
                        <span class="text-sm font-semibold">Save</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- Right Column: Metadata -->
        <div class="lg:col-span-7 flex flex-col gap-8">
            <section>
                <div class="flex flex-wrap gap-2 mb-6">
                    <span
                        class="px-3 py-1 rounded-full bg-primary/10 text-primary text-xs font-bold tracking-wider uppercase">New
                        Release</span>
                    <span
                        class="px-3 py-1 rounded-full bg-slate-200 dark:bg-slate-800 text-slate-600 dark:text-slate-400 text-xs font-bold tracking-wider uppercase">Cyberpunk</span>
                </div>
                <h1
                    class="text-5xl lg:text-6xl font-extrabold text-slate-900 dark:text-slate-100 leading-[1.1] mb-6 tracking-tight">
                    The Digital Fringe: Issue #04
                </h1>
                <div class="flex items-center gap-4 mb-8 p-1">
                    <div class="h-12 w-12 rounded-full bg-slate-300 overflow-hidden ring-2 ring-white dark:ring-slate-900">
                        <img alt="Author portrait" class="h-full w-full object-cover"
                            data-alt="Close up portrait of the zine author Elena Vance"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuASqdTPJLQ6WfzOUaLPF-wXQgdAzOq33ThiKGjciNxZ5fcmkoEaPfjbhYcFlZwz-5X2196vbNNiM3nB0MXpVmJGasa0Cg-Z9V39vfI-AgwDa2Afpj_cFF5Ep3mtdMAqD-urQjCn-_LhXWYjqoiIdw6VnEjF0JgGzGCAODkDk5xwAvtSlBbbMqLetghO3fhZm7jwPZ8cSVKOoLfqZoUOVWIt0L5qW-XzPpF0pLVkVtjaVYYrOobn1N9MG5D33a-Bf8azVsQ_geFPdRGu" />
                    </div>
                    <div>
                        <p class="text-sm text-slate-500 dark:text-slate-400">Created by</p>
                        <p class="text-base font-bold text-slate-900 dark:text-slate-100">Elena Vance <span
                                class="text-slate-400 font-normal mx-2">•</span> <span class="font-medium">Oct
                                2023</span></p>
                    </div>
                </div>
            </section>
            <section class="flex flex-col gap-6">
                <div class="flex flex-wrap gap-4">
                    <button
                        class="flex-1 min-w-[200px] flex items-center justify-center gap-3 bg-primary text-white py-4 px-8 rounded-xl font-bold text-lg hover:shadow-lg hover:shadow-primary/20 transition-all">
                        <span class="material-symbols-outlined">menu_book</span>
                        Read Online
                    </button>
                    <button
                        class="flex-1 min-w-[200px] flex items-center justify-center gap-3 bg-white dark:bg-slate-800 border-2 border-slate-200 dark:border-slate-700 text-slate-900 dark:text-slate-100 py-4 px-8 rounded-xl font-bold text-lg hover:bg-slate-50 dark:hover:bg-slate-700 transition-all">
                        <span class="material-symbols-outlined">download</span>
                        Download PDF
                    </button>
                </div>
            </section>
            <section class="border-t border-slate-200 dark:border-slate-800 pt-8">
                <h3 class="text-xl font-bold mb-4">About this zine</h3>
                <div class="prose dark:prose-invert max-w-none text-slate-600 dark:text-slate-400 leading-relaxed text-lg">
                    <p>
                        Issue #04 of <em class="text-slate-900 dark:text-slate-100 font-medium">The Digital Fringe</em>
                        explores the intersection of retro-futurism and modern algorithmic art. This 48-page collection
                        features exclusive interviews with glitch artists, a deep dive into the resurgence of DIY
                        printed media in the age of AI, and stunning full-page spreads of neon-infused landscapes.
                    </p>
                    <p class="mt-4">
                        This issue serves as a manifesto for the independent press, reclaiming digital spaces for human
                        creativity and imperfect expressions.
                    </p>
                </div>
            </section>
            <section class="flex flex-col gap-4">
                <h3 class="text-sm font-bold text-slate-400 uppercase tracking-widest">Metadata &amp; Tags</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div class="p-4 rounded-xl bg-white dark:bg-slate-800/50 border border-slate-200 dark:border-slate-800">
                        <p class="text-xs text-slate-400 font-semibold mb-1">Format</p>
                        <p class="text-sm font-bold">PDF / EPUB</p>
                    </div>
                    <div class="p-4 rounded-xl bg-white dark:bg-slate-800/50 border border-slate-200 dark:border-slate-800">
                        <p class="text-xs text-slate-400 font-semibold mb-1">Length</p>
                        <p class="text-sm font-bold">48 Pages</p>
                    </div>
                    <div class="p-4 rounded-xl bg-white dark:bg-slate-800/50 border border-slate-200 dark:border-slate-800">
                        <p class="text-xs text-slate-400 font-semibold mb-1">Language</p>
                        <p class="text-sm font-bold">English</p>
                    </div>
                    <div class="p-4 rounded-xl bg-white dark:bg-slate-800/50 border border-slate-200 dark:border-slate-800">
                        <p class="text-xs text-slate-400 font-semibold mb-1">License</p>
                        <p class="text-sm font-bold">CC BY-NC 4.0</p>
                    </div>
                </div>
                <div class="flex flex-wrap gap-2 mt-4">
                    <a class="px-4 py-2 bg-slate-100 dark:bg-slate-800 rounded-lg text-sm font-medium hover:bg-primary/10 hover:text-primary transition-colors"
                        href="#">#Cyberpunk</a>
                    <a class="px-4 py-2 bg-slate-100 dark:bg-slate-800 rounded-lg text-sm font-medium hover:bg-primary/10 hover:text-primary transition-colors"
                        href="#">#Indie Publishing</a>
                    <a class="px-4 py-2 bg-slate-100 dark:bg-slate-800 rounded-lg text-sm font-medium hover:bg-primary/10 hover:text-primary transition-colors"
                        href="#">#Digital Art</a>
                    <a class="px-4 py-2 bg-slate-100 dark:bg-slate-800 rounded-lg text-sm font-medium hover:bg-primary/10 hover:text-primary transition-colors"
                        href="#">#Short Stories</a>
                    <a class="px-4 py-2 bg-slate-100 dark:bg-slate-800 rounded-lg text-sm font-medium hover:bg-primary/10 hover:text-primary transition-colors"
                        href="#">#Graphic Design</a>
                </div>
            </section>
        </div>
    </div>
    <!-- Related Items -->
    <section class="mt-24 pt-16 border-t border-slate-200 dark:border-slate-800">
        <div class="flex items-end justify-between mb-10">
            <div>
                <h2 class="text-3xl font-bold mb-2">More from Elena Vance</h2>
                <p class="text-slate-500 dark:text-slate-400">Recommended based on your interest in experimental zines.
                </p>
            </div>
            <a class="text-primary font-bold flex items-center gap-1 hover:gap-2 transition-all" href="#">
                View Artist Profile <span class="material-symbols-outlined">arrow_forward</span>
            </a>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6">
            <div class="group cursor-pointer">
                <div class="aspect-[3/4] rounded-lg bg-slate-200 dark:bg-slate-800 mb-3 overflow-hidden">
                    <div class="h-full w-full bg-cover bg-center group-hover:scale-105 transition-transform duration-300"
                        data-alt="Cover of Issue 03 with blue aesthetic"
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBLCs1xZH_eb_mOv4543qAr1cS5P84rO3W3SDXZrQ2n5-z1iURc_VKyS77n7_-2hoix3zylP7aKB_vhILeNcQ6wcZISULOUua8fSjq9v1OFIch0iPxKmnngLokr39VajOglQrbz2YurCJ-j7nNHYxKCQ17sfFEtu0vQJk3-7vvc0pJVBs2OW4Wg5W9eFuaM8omTUCXPDTYOeAWqe5OUcPj2yEeTMGX-Y3cEYPgCGl4e02FXxNLOMghDRjaQfvAlLP0bWRRqewmZ-wgD');">
                    </div>
                </div>
                <h4 class="font-bold text-sm line-clamp-1 group-hover:text-primary transition-colors">The Digital
                    Fringe: Issue #03</h4>
                <p class="text-xs text-slate-500">Aug 2023</p>
            </div>
            <div class="group cursor-pointer">
                <div class="aspect-[3/4] rounded-lg bg-slate-200 dark:bg-slate-800 mb-3 overflow-hidden">
                    <div class="h-full w-full bg-cover bg-center group-hover:scale-105 transition-transform duration-300"
                        data-alt="Cover of Issue 02 with green aesthetic"
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDJQkDXD8FfuLi0ci1l8u1g1-WWywsg6wOdWUzijM_M4wgZ9h-00KpUZ8fmElgezkJBZdpPdPUexmtQZjNs0K3SsC2M4IXg01oZIH6-1paHk-bD7RpA2mpwYLZNtfOe8gtM-qARAuiQL_4SBl5MOWiiJxftAIEii5RFKzgPZgmITAP9q2KxYJNMTai7bBUaJsl9Y_EWH7i-_UpALdrxCuJWM64OBbEhCAHloKgBUKwO_77p5N_P4zsGVPYdR3Xe0tCAo4MFqtPfwdEr');">
                    </div>
                </div>
                <h4 class="font-bold text-sm line-clamp-1 group-hover:text-primary transition-colors">The Digital
                    Fringe: Issue #02</h4>
                <p class="text-xs text-slate-500">May 2023</p>
            </div>
            <div class="group cursor-pointer">
                <div class="aspect-[3/4] rounded-lg bg-slate-200 dark:bg-slate-800 mb-3 overflow-hidden">
                    <div class="h-full w-full bg-cover bg-center group-hover:scale-105 transition-transform duration-300"
                        data-alt="Cover of Issue 01 with red aesthetic"
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDJ18m_upr_P_-GhrlsLM3pHcO1kG38oVH1pBhfW7d1c5H4GnsjzTD8ifzegkV5XovFIyFY-kFm4tcemIX4n6rjZVx-ZxYVT82AiGeq4Hok67mvXnWm01aUwvKFzC0PgfhztNIFgf_AF6MNGVCG7BK1fmrqJH5Rz4gOqRmVRmc5G4MjHTzCfTujTqH2w_Ak8L3WOe_Ltpbu6ZOGQlmbMyx5ZuV3N4zGCDuIoC_i6DeuiXU_sy4qna4D22-fIbU2pDFVFwXOFVM2PWwK');">
                    </div>
                </div>
                <h4 class="font-bold text-sm line-clamp-1 group-hover:text-primary transition-colors">The Digital
                    Fringe: Issue #01</h4>
                <p class="text-xs text-slate-500">Jan 2023</p>
            </div>
            <div class="group cursor-pointer">
                <div class="aspect-[3/4] rounded-lg bg-slate-200 dark:bg-slate-800 mb-3 overflow-hidden">
                    <div class="h-full w-full bg-cover bg-center group-hover:scale-105 transition-transform duration-300"
                        data-alt="A separate collection zine titled Neon Nights"
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDjkBURfwLFzobvP_w3vBilt5FP0NZhVUpc4z-LJS8WI2l0eLBo-11WLDEXIeVYfHUQZIXmWouO7sVaBCvwKskAol5vmMa3WPh_9Un--PDyYzwtpv_clMFwNhUEroTTuPi4gqtPSJmMOq7FfUee4mEhtHKtZ1s_9zWBVtlY8TqRZt3IRWxjG95izZEoc2FT7TXFVeOnqPX2noYuw5HJWt4DABirTYLnwiW9RxmKe2r-EzgrqyCeVLLeN6Qa9NfM9gFoLinCrR59Z9wi');">
                    </div>
                </div>
                <h4 class="font-bold text-sm line-clamp-1 group-hover:text-primary transition-colors">Neon Nights:
                    Special Edition</h4>
                <p class="text-xs text-slate-500">Dec 2022</p>
            </div>
            <div class="group cursor-pointer">
                <div class="aspect-[3/4] rounded-lg bg-slate-200 dark:bg-slate-800 mb-3 overflow-hidden">
                    <div class="h-full w-full bg-cover bg-center group-hover:scale-105 transition-transform duration-300"
                        data-alt="Minimalist sketches zine cover"
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD8GKNotDE6-GgV4JHK1dYGKvBDHgC9qXENvToZyuYn0Z3vMrh5xqUMlKn_xXeuTgBDTE0ynlKUCfA4S7wPOfprcVSQlWW_15LyWUfTI_KOz8No-2N4IilOJUkxaAcDe6Q7qi-xCyB4HpVeDWm3RjYILC15IXVh4arozfOb3iD3WzbCgqE4pRVy6jelm3ir8udBAClVDDhC2Pbp8rxROblUFis7BHSWqeBW21LWweevSHsGcTDt3mw9BhGWErk8L_ORG17Oa21OTkee');">
                    </div>
                </div>
                <h4 class="font-bold text-sm line-clamp-1 group-hover:text-primary transition-colors">Minimalist
                    Sketches Vol 2</h4>
                <p class="text-xs text-slate-500">Oct 2022</p>
            </div>
        </div>
    </section>
@endsection
