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
            <!-- Category Filter Dropdown -->
            <div class="mb-6 md:mb-8 flex items-center gap-3">
                <label for="category-filter" class="text-slate-600 dark:text-slate-300 text-sm font-semibold">
                    Filter by Category:
                </label>
                <form method="GET" action="{{ route('article.index') }}">
                    <select id="category-filter" name="category"
                        class="block w-48 md:w-60 rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-900 text-slate-700 dark:text-slate-100 py-2 px-3 text-sm focus:ring-2 focus:ring-primary focus:border-primary transition"
                        onchange="this.form.submit()">
                        <option value="" {{ !request('category') ? 'selected' : '' }}>All Posts</option>
                        @foreach ($post_categories as $category)
                            <option value="{{ $category->slug }}"
                                {{ request('category') == $category->slug ? 'selected' : '' }}>
                                {{ $category->title }}
                            </option>
                        @endforeach
                    </select>
                </form>
            </div>
            <!-- Blog Feed -->
            <div class="flex flex-col gap-8 md:gap-10 lg:gap-12">
                @foreach ($posts as $post)
                    <div
                        class="group flex flex-col md:flex-row items-stretch justify-between gap-4 md:gap-6 lg:gap-8 py-3 md:py-4">

                        <div class="flex flex-1 md:flex-[1.5] flex-col gap-3 md:gap-4">

                            <div class="flex flex-col gap-2 md:gap-3">

                                <div class="flex items-center gap-2 flex-wrap">
                                    <a href="{{ route('article.index', ['category' => $post->category->slug]) }}">
                                        <span
                                            class="px-2 py-0.5 rounded bg-primary/10 text-primary text-[10px] font-extrabold uppercase tracking-widest">
                                            {{ $post->category->title }}
                                        </span>
                                    </a>
                                    <span class="text-slate-400 text-xs font-medium uppercase tracking-tight">
                                        • {{ $post->created_at->diffForHumans() }}
                                    </span>
                                </div>
                                <a href="/artikel/{{ $post->slug }}">
                                    <h2
                                        class="text-navy-custom dark:text-slate-100 text-xl sm:text-2xl font-extrabold leading-snug group-hover:text-primary transition-colors cursor-pointer">
                                        {{ $post->title }}
                                    </h2>
                                </a>
                                <p class="text-slate-400 text-xs">{{ $post->user->name ?? 'Unknown Author' }}</p>

                                <p
                                    class="text-slate-600 dark:text-slate-700 text-sm sm:text-base leading-relaxed line-clamp-2 md:line-clamp-3">
                                    {{ Str::limit(strip_tags($post->content), 150) }}
                                </p>

                            </div>

                            <div class="flex items-center justify-between mt-1 md:mt-2">
                                <a class="flex items-center gap-1 text-primary text-xs sm:text-sm font-bold hover:gap-2 transition-all"
                                    href="/artikel/{{ $post->slug }}">

                                    <span class="hidden sm:inline">Read More</span>
                                    <span class="sm:hidden">Read</span>
                                    <span class="material-symbols-outlined text-base sm:text-lg">arrow_forward</span>

                                </a>

                            </div>

                        </div>

                        <div class="w-full md:w-56 lg:w-64 h-40 md:h-44 bg-center bg-no-repeat bg-cover rounded-xl shadow-sm group-hover:shadow-md transition-shadow flex-shrink-0"
                            style="background-image: url('{{ $post->thumbnail_url }}');">
                        </div>

                    </div>
                @endforeach
            </div>
            <!-- Pagination -->
            <div class="mt-12 md:mt-16 flex items-center justify-center gap-1 md:gap-2 pb-12 md:pb-20">
            </div>
            {{ $posts->links() }}
        </div>
    </div>
@endsection
