@extends('layout.app')

@section('content')
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-20">
        <div class="lg:col-span-5">
            <div class="sticky top-28">
                <div
                    class="group relative aspect-[3/4] w-full overflow-hidden rounded-xl shadow-2xl bg-slate-200 dark:bg-slate-800">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                        style="background-image: url('{{ $zine->featured_image_url ?? 'https://placehold.co/800x1200?text=Zine' }}');">
                    </div>
                    <div class="absolute inset-0 ring-1 ring-inset ring-black/10 rounded-xl"></div>
                </div>
            </div>
        </div>

        <div class="lg:col-span-7 flex flex-col gap-8">
            <section>
                <div class="flex flex-wrap gap-2 mb-6">
                    @if ($zine->category)
                        <a href="{{ route('zine.catalog', ['category' => $zine->category->slug]) }}"
                            class="px-3 py-1 rounded-full bg-slate-200 dark:bg-slate-800 text-slate-600 dark:text-slate-400 text-xs font-bold tracking-wider uppercase hover:bg-primary/10 hover:text-primary transition-colors">
                            {{ $zine->category->zine_category }}
                        </a>
                    @endif
                </div>

                <h1
                    class="text-5xl lg:text-6xl font-extrabold text-slate-900 dark:text-slate-100 leading-[1.1] mb-6 tracking-tight">
                    {{ $zine->title }}
                </h1>

                <div class="flex items-center gap-4 mb-8 p-1">
                    <div>
                        <p class="text-sm text-slate-500 dark:text-slate-400">Dibuat Oleh:</p>
                        <p class="text-base font-bold text-slate-900 dark:text-slate-100">
                            {{ $zine->author }}
                            <span class="text-slate-400 font-normal mx-2">|</span>
                            <span class="font-medium">{{ $zine->created_at?->translatedFormat('d M Y') }}</span>
                        </p>
                    </div>
                </div>
            </section>

            <section class="flex flex-col gap-6">
                <div class="flex flex-wrap gap-4">
                    <a href="{{ $zine->link_pdf }}" target="_blank"
                        class="flex-1 min-w-[200px] flex items-center justify-center gap-3 bg-primary text-white py-4 px-8 rounded-xl font-bold text-lg hover:shadow-lg hover:shadow-primary/20 transition-all">
                        <span class="material-symbols-outlined">menu_book</span>
                        Read Online
                    </a>
                    <a href="{{ $zine->link_pdf }}" download
                        class="flex-1 min-w-[200px] flex items-center justify-center gap-3 bg-white dark:bg-slate-800 border-2 border-slate-200 dark:border-slate-700 text-slate-900 dark:text-slate-100 py-4 px-8 rounded-xl font-bold text-lg hover:bg-slate-50 dark:hover:bg-slate-700 transition-all">
                        <span class="material-symbols-outlined">download</span>
                        Download PDF
                    </a>
                </div>
            </section>

            <section class="border-t border-slate-200 dark:border-slate-800 pt-8">
                <h3 class="text-xl font-bold mb-4">About this zine</h3>
                <div class="prose dark:prose-invert max-w-none text-slate-600 dark:text-slate-400 leading-relaxed text-lg">
                    <p>{!! $zine->description ?: 'Belum ada deskripsi untuk zine ini.' !!}</p>
                </div>
            </section>

            <section class="flex flex-col gap-4">
                <div class="flex flex-wrap gap-2 mt-4">
                    @forelse ($zine->tags as $tag)
                        <a class="px-4 py-2 bg-slate-100 dark:bg-slate-800 rounded-lg text-sm font-medium hover:bg-primary/10 hover:text-primary transition-colors"
                            href="{{ route('zine.catalog', ['tag' => $tag->slug]) }}">
                            #{{ $tag->zine_tag }}
                        </a>
                    @empty
                        <span
                            class="px-4 py-2 bg-slate-100 dark:bg-slate-800 rounded-lg text-sm font-medium text-slate-500">Tanpa
                            tag</span>
                    @endforelse
                </div>
            </section>
        </div>
    </div>
@endsection
