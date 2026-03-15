@extends('layout.app')
@section('content')
    <article class="max-w-4xl mx-auto px-6 py-10">
        <!-- Breadcrumbs -->
        <nav class="flex items-center gap-2 mb-8 text-sm font-medium text-slate-500 dark:text-slate-400">

            <a class="hover:text-primary" href="{{ route('article.index') }}">Artikel</a>
            <span class="material-symbols-outlined text-xs">chevron_right</span>
            <span class="text-slate-900 dark:text-slate-100 truncate">{{ $post->title }}</span>
        </nav>
        <!-- Article Header -->
        <header class="mb-12">
            <h1 class="text-4xl md:text-6xl font-black text-slate-900 dark:text-white mb-8 tracking-tight leading-[1.1]">
                {{ $post->title }} </h1>
            <div class="flex items-center justify-between py-2">
                <div class="flex items-center gap-4">

                    <div>
                        <div class="flex items-center gap-3 text-sm text-slate-500 dark:text-slate-400">
                            <span>Oct 12, 2023</span>
                        </div>
                    </div>
                </div>
                <div class="flex gap-2">
                    <button id="share-button" data-title="{{ $post->title }}" data-url="{{ url()->current() }}"
                        class="p-2 rounded-full border border-slate-200 dark:border-slate-800 hover:bg-primary/10 hover:text-primary transition-colors">
                        <span class="material-symbols-outlined text-xl">share</span>
                    </button>
                </div>
            </div>
        </header>
        <!-- Hero Image -->
        <figure class="mb-12">
            <div class="aspect-video w-full rounded-xl bg-cover bg-center shadow-2xl"
                data-alt="Close up of a vibrant risograph printing process"
                style="background-image: url({{ $post->thumbnail_url }})">
            </div>

        </figure>
        <!-- Content Body -->
        <div class="prose lg:prose-xl prose-slate dark:prose-invert max-w-none">
            {!! $post->content !!}
        </div>
        <!-- Footer Article Info -->
        <footer class="mt-16 pt-10 border-t border-slate-200 dark:border-slate-800">
            <div class="flex flex-wrap gap-2 mb-10">
                @foreach ($post->tags as $tag)
                    <span
                        class="px-3 py-1 bg-slate-100 dark:bg-slate-800 rounded-full text-xs font-bold text-slate-600 dark:text-slate-400">
                        #{{ $tag->name }}
                    </span>
                @endforeach
            </div>
        </footer>
    </article>
    <!-- Related Articles -->
    <section class="bg-white dark:bg-background-dark/50 py-20 border-t rounded-lg border-slate-200 dark:border-slate-800">
        <div class="max-w-6xl mx-auto px-6">
            <div class="flex items-center justify-between mb-12">
                <h2 class="text-3xl font-black tracking-tight">Baca Artikel lainnya</h2>
                <a class="text-primary font-bold flex items-center gap-2 hover:underline" href="/artikel">
                    lihat semua
                    <span class="material-symbols-outlined">arrow_forward</span>
                </a>

            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- articles -->
                @foreach ($relatedPosts as $relatedPost)
                    <a href="{{ route('article.show', $relatedPost->slug) }}" class="group cursor-pointer">
                        <div class="aspect-[4/3] rounded-xl bg-cover bg-center mb-4 transition-transform group-hover:scale-[1.02]"
                            data-alt="{{ $relatedPost->title }}"
                            style="background-image: url({{ $relatedPost->thumbnail_url }})">
                        </div>
                        <span
                            class="text-primary font-bold text-xs uppercase tracking-widest">{{ $relatedPost->category->title ?? 'Article' }}</span>
                        <h3 class="text-xl font-extrabold mt-2 group-hover:text-primary transition-colors">
                            {{ $relatedPost->title }}</h3>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    <script>
        const shareBtn = document.getElementById('share-button');

        shareBtn.addEventListener('click', async () => {
            const title = shareBtn.getAttribute('data-title');
            const url = shareBtn.getAttribute('data-url');

            // Cek apakah browser mendukung Web Share API (Mobile & Modern Browser)
            if (navigator.share) {
                try {
                    await navigator.share({
                        title: title,
                        text: 'Baca artikel menarik ini: ' + title,
                        url: url,
                    });
                    console.log('Berhasil dibagikan');
                } catch (err) {
                    console.log('Batal berbagi:', err);
                }
            } else {
                // Fallback: Salin link jika Web Share API tidak didukung (Desktop lama)
                try {
                    await navigator.clipboard.writeText(url);
                    alert('Link berhasil disalin ke clipboard!');
                } catch (err) {
                    console.error('Gagal menyalin link:', err);
                }
            }
        });
    </script>
@endsection
