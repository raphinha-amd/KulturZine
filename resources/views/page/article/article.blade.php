@extends('layout.app')
@section('content')
    <div class="flex flex-1 justify-center py-6 md:py-10 px-4 sm:px-6 lg:px-8">
        <div class="layout-content-container flex flex-col max-w-[960px] w-full flex-1">
            <!-- Page Header -->
            <div class="flex flex-col gap-2 mb-6 md:mb-8">
                <h1
                    class="text-navy-custom dark:text-slate-100 text-3xl sm:text-4xl md:text-5xl font-black leading-tight tracking-tight">
                    Community Feed</h1>
                <p class="text-slate-500 dark:text-slate-400 text-base md:text-lg font-medium">Discover the latest
                    independent voices and
                    underground stories.</p>
            </div>
            <!-- Category Tabs -->
            <div class="mb-6 md:mb-8 overflow-x-auto scrollbar-hide -mx-4 px-4 sm:mx-0 sm:px-0">
                <div class="flex border-b border-slate-200 dark:border-slate-800 gap-4 sm:gap-6 md:gap-8 min-w-max">
                    <a class="flex flex-col items-center border-b-2 border-primary text-navy-custom dark:text-slate-100 pb-2.5 md:pb-3"
                        href="#">
                        <span class="text-xs sm:text-sm font-bold uppercase tracking-wider whitespace-nowrap">All
                            Posts</span>
                    </a>
                    <a class="flex flex-col items-center border-b-2 border-transparent text-slate-400 dark:text-slate-500 pb-2.5 md:pb-3 hover:text-navy-custom transition-colors"
                        href="#">
                        <span class="text-xs sm:text-sm font-bold uppercase tracking-wider whitespace-nowrap">Essays</span>
                    </a>
                    <a class="flex flex-col items-center border-b-2 border-transparent text-slate-400 dark:text-slate-500 pb-2.5 md:pb-3 hover:text-navy-custom transition-colors"
                        href="#">
                        <span class="text-xs sm:text-sm font-bold uppercase tracking-wider whitespace-nowrap">Poetry</span>
                    </a>
                    <a class="flex flex-col items-center border-b-2 border-transparent text-slate-400 dark:text-slate-500 pb-2.5 md:pb-3 hover:text-navy-custom transition-colors"
                        href="#">
                        <span
                            class="text-xs sm:text-sm font-bold uppercase tracking-wider whitespace-nowrap">Interviews</span>
                    </a>
                    <a class="flex flex-col items-center border-b-2 border-transparent text-slate-400 dark:text-slate-500 pb-2.5 md:pb-3 hover:text-navy-custom transition-colors"
                        href="#">
                        <span class="text-xs sm:text-sm font-bold uppercase tracking-wider whitespace-nowrap">Visual
                            Arts</span>
                    </a>
                </div>
            </div>
            <!-- Blog Feed -->
            <div class="flex flex-col gap-8 md:gap-10 lg:gap-12">

                <!-- Post 2 -->
                <div
                    class="group flex flex-col md:flex-row items-stretch justify-between gap-4 md:gap-6 lg:gap-8 py-3 md:py-4">
                    <div class="flex flex-1 md:flex-[1.5] flex-col gap-3 md:gap-4">
                        <div class="flex flex-col gap-2 md:gap-3">
                            <div class="flex items-center gap-2 flex-wrap">
                                <span
                                    class="px-2 py-0.5 rounded bg-primary/10 text-primary text-[10px] font-extrabold uppercase tracking-widest">Culture</span>
                                <span class="text-slate-400 text-xs font-medium uppercase tracking-tight">• 8 min
                                    read</span>
                            </div>
                            <h2
                                class="text-navy-custom dark:text-slate-100 text-xl sm:text-2xl font-extrabold leading-snug group-hover:text-primary transition-colors cursor-pointer">
                                Ink and Paper: The Resurgence of Print</h2>
                            <p
                                class="text-slate-600 dark:text-slate-400 text-sm sm:text-base leading-relaxed line-clamp-2 md:line-clamp-3">
                                Why
                                physical
                                zines are making a massive comeback in a digital-first world and the tactile joy of handmade
                                storytelling.</p>
                        </div>
                        <div class="flex items-center justify-between mt-1 md:mt-2">
                            <div class="flex items-center gap-2">
                                <div class="size-6 rounded-full bg-slate-200" data-alt="Author profile picture"
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAL4jo8rGwd3gMMALv0X_JliftYaeBixKSS6pSmYmIEd6a5TG6cZk6QUDdQ7l5aEKFd_zwpMUSm3mzpNioFqJaa-IDUPiVx5jO8y_1Df04MqkTvTLLXdZq3OK1Xst2Rs42NijVorXqHq3sFWWsW56TuCEc1RgAJRzkAyT8aqvK_QarTOY9k-sdwaoo747b-a4chupFJM1wLSXyIYnS6V9tNAE4difsOLD-J4gyWhhU-4O22F43uX3DtTua7_aquWr8aU8dA8LxB9drz'); background-size: cover;">
                                </div>
                                <span class="text-xs font-bold text-navy-custom dark:text-slate-300">Maya Chen</span>
                            </div>
                            <a class="flex items-center gap-1 text-primary text-xs sm:text-sm font-bold hover:gap-2 transition-all"
                                href="/artikel/detail-artikel">
                                <span class="hidden sm:inline">Read More</span>
                                <span class="sm:hidden">Read</span>
                                <span class="material-symbols-outlined text-base sm:text-lg">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                    <div class="w-full md:w-56 lg:w-64 h-40 md:h-44 bg-center bg-no-repeat bg-cover rounded-xl shadow-sm group-hover:shadow-md transition-shadow flex-shrink-0"
                        data-alt="Stack of artistic magazines and journals"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBfDhgqEc01YDcw1rtwFrKr6ZUY0e9ZSd4H0xui_XWmTSTQNC6p5nbIc-q4CpV26VMmtpy_DRqra_R88naxNC8eACFCSrOzeyz0uv82Zt-D86wMP-Q8u0DlZbNaVoGIQetvpbPfX7bbpOWFWkqO4B2QKa3kS8a4I0EnWZ4irtvKk8ML1UlXc0I8Kyh2EqfgAvshmN0TjEevGjmBCt6DMpAsC_7P20WrUmTtP5UGMqy9QyIPrYKBDKDJt9TEyYwPpe2d3PbgAtK1o27o");'>
                    </div>
                </div>
                <!-- Post 3 -->
                <div
                    class="group flex flex-col md:flex-row items-stretch justify-between gap-4 md:gap-6 lg:gap-8 py-3 md:py-4">
                    <div class="flex flex-1 md:flex-[1.5] flex-col gap-3 md:gap-4">
                        <div class="flex flex-col gap-2 md:gap-3">
                            <div class="flex items-center gap-2 flex-wrap">
                                <span
                                    class="px-2 py-0.5 rounded bg-primary/10 text-primary text-[10px] font-extrabold uppercase tracking-widest">Interview</span>
                                <span class="text-slate-400 text-xs font-medium uppercase tracking-tight">• 12 min
                                    read</span>
                            </div>
                            <h2
                                class="text-navy-custom dark:text-slate-100 text-xl sm:text-2xl font-extrabold leading-snug group-hover:text-primary transition-colors cursor-pointer">
                                Voices from the Underground</h2>
                            <p
                                class="text-slate-600 dark:text-slate-400 text-sm sm:text-base leading-relaxed line-clamp-2 md:line-clamp-3">
                                A
                                conversation
                                with the creators of 'Neon Flux', the zine that took Berlin's art scene by storm during the
                                summer of 2023.</p>
                        </div>
                        <div class="flex items-center justify-between mt-1 md:mt-2">
                            <div class="flex items-center gap-2">
                                <div class="size-6 rounded-full bg-slate-200" data-alt="Author profile picture"
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBf8qW1dNsVXnCCErCRtS3VggLFEffTH8WhCjwZt5grRO3TJr9_xKuqEVSa-gVAhuEd2nkWfkxQcqKPnLD1imTQmoi4BcPSGGHH2kgOizZDkawYBPCQ36F_JvT9KpkLBhFzJfvZsZfvVcBeNh76yKZuL9yCS3OuHpUwBXsYxBZXRKjcGbFCUIstoz5W-7nSuTRcPgz-tmaUuoBU88tPoVrOF4P9l4bnSrz8_lCD9AsiPTZCAJDb2LpEj1KOZnm6elbp8O7q17UQFVfD'); background-size: cover;">
                                </div>
                                <span class="text-xs font-bold text-navy-custom dark:text-slate-300">Dorian Gray</span>
                            </div>
                            <a class="flex items-center gap-1 text-primary text-xs sm:text-sm font-bold hover:gap-2 transition-all"
                                href="#">
                                <span class="hidden sm:inline">Read More</span>
                                <span class="sm:hidden">Read</span>
                                <span class="material-symbols-outlined text-base sm:text-lg">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                    <div class="w-full md:w-56 lg:w-64 h-40 md:h-44 bg-center bg-no-repeat bg-cover rounded-xl shadow-sm group-hover:shadow-md transition-shadow flex-shrink-0"
                        data-alt="Modern neon lit urban art studio"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDJdLfM06sTnEAVpOxMxvw46CvLQ8kIe-RB9BrMi38C-7s0PIVF20pmBSJf5ypdY-Di4gJWfz4ejdFIGHhJ5MQ11PVQo1UHwl4gFjj3sHuamg8JbK4jgmjVm6VcqzXkIWo2nCWkSCxZ3law69kILvO5Lh0JdmcVHNz9v2kHCci90-iZL6hSpTGvN_uMBVuugZJgkZ5TyzDwIsh776fV9rr-ekkQrdgATfndCA10wWKx44kB1iImCQU_jFl5_FtvcJPYZ-t5iOv4ddUi");'>
                    </div>
                </div>
                <!-- Post 4 -->
                <div
                    class="group flex flex-col md:flex-row items-stretch justify-between gap-4 md:gap-6 lg:gap-8 py-3 md:py-4">
                    <div class="flex flex-1 md:flex-[1.5] flex-col gap-3 md:gap-4">
                        <div class="flex flex-col gap-2 md:gap-3">
                            <div class="flex items-center gap-2 flex-wrap">
                                <span
                                    class="px-2 py-0.5 rounded bg-primary/10 text-primary text-[10px] font-extrabold uppercase tracking-widest">Poetry</span>
                                <span class="text-slate-400 text-xs font-medium uppercase tracking-tight">• 3 min
                                    read</span>
                            </div>
                            <h2
                                class="text-navy-custom dark:text-slate-100 text-xl sm:text-2xl font-extrabold leading-snug group-hover:text-primary transition-colors cursor-pointer">
                                Echoes of the Concrete Forest</h2>
                            <p
                                class="text-slate-600 dark:text-slate-400 text-sm sm:text-base leading-relaxed line-clamp-2 md:line-clamp-3">
                                A new
                                collection of verse exploring the intersection of brutalist architecture and organic growth
                                in
                                modern megacities.</p>
                        </div>
                        <div class="flex items-center justify-between mt-1 md:mt-2">
                            <div class="flex items-center gap-2">
                                <div class="size-6 rounded-full bg-slate-200" data-alt="Author profile picture"
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDKFflXbXQD95f_l3ewJL9HcNgXz0XobxkSCOlQahL4_6FPLk9qafRG1k3Y_wlU-sjLhl6XgB4Fk4jCthZCT8U_BYyhoH9pnhVQRAfJCo16KN8jSUNquPOCURdN1HB2QbS5xM3nSXxDBsjpKb0oqp2WAr2_37S6B9gOZ2cCCgdDoCHbte-jeCXWU0clE4Q1mpINULWZK4kB_IMxTGBoOyNJjSkTxNFLHXGqvV_e9GBfSrtf9KRbvDw9Wm7LzQB6dBeNfbFUsichpKtg'); background-size: cover;">
                                </div>
                                <span class="text-xs font-bold text-navy-custom dark:text-slate-300">Elena Thorne</span>
                            </div>
                            <a class="flex items-center gap-1 text-primary text-xs sm:text-sm font-bold hover:gap-2 transition-all"
                                href="#">
                                <span class="hidden sm:inline">Read More</span>
                                <span class="sm:hidden">Read</span>
                                <span class="material-symbols-outlined text-base sm:text-lg">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                    <div class="w-full md:w-56 lg:w-64 h-40 md:h-44 bg-center bg-no-repeat bg-cover rounded-xl shadow-sm group-hover:shadow-md transition-shadow flex-shrink-0"
                        data-alt="Close up of brutalist concrete building and green vines"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCdwNddEQMMnHM9qzg1-umjWQTP9b9pde__6_QSFo5h2slEAx9JelQ4nS2dHN8MQjjYtPmT6GhcLveX-T0a7AYGJ1VX4tLx9hWK2ji4s9jQcsWM-iXfvVGfqCCdNTVKtb-nW4dTeeYEmotafHb7wUDAxMm009LN1RsynezP9h_z27jWgrWtcSNnwYoF_Zc6xVGaT3ytiBJYjxu-Xo16h8vOnHEy12kcAFes-nbc_WfV94mJiYJVa1WPujYpQne29I6goeiuOGfbZAha");'>
                    </div>
                </div>
            </div>
            <!-- Pagination -->
            <div class="mt-12 md:mt-16 flex items-center justify-center gap-1 md:gap-2 pb-12 md:pb-20">
                <button
                    class="flex items-center justify-center size-9 md:size-10 rounded-lg bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-400 hover:text-primary transition-colors">
                    <span class="material-symbols-outlined text-xl">chevron_left</span>
                </button>
                <button
                    class="flex items-center justify-center size-9 md:size-10 rounded-lg bg-primary text-white font-bold text-sm">1</button>
                <button
                    class="flex items-center justify-center size-9 md:size-10 rounded-lg bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-navy-custom dark:text-slate-300 font-bold text-sm hover:border-primary transition-colors">2</button>
                <button
                    class="flex items-center justify-center size-9 md:size-10 rounded-lg bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-navy-custom dark:text-slate-300 font-bold text-sm hover:border-primary transition-colors">3</button>
                <span class="px-1 md:px-2 text-slate-400 text-sm">...</span>
                <button
                    class="flex items-center justify-center size-9 md:size-10 rounded-lg bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-navy-custom dark:text-slate-300 font-bold text-sm hover:border-primary transition-colors">12</button>
                <button
                    class="flex items-center justify-center size-9 md:size-10 rounded-lg bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-400 hover:text-primary transition-colors">
                    <span class="material-symbols-outlined text-xl">chevron_right</span>
                </button>
            </div>
        </div>
    </div>
@endsection
