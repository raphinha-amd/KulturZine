@extends('layout.app')
@section('content')
    <!-- Header Section -->
    <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-10">
        <div class="max-w-2xl">
            <h1 class="text-slate-900 dark:text-white text-5xl font-black tracking-tight mb-4">Creative Gallery</h1>
            <p class="text-slate-600 dark:text-slate-400 text-lg leading-relaxed">
                A curated collection of community-driven stories, independent illustrations, and captured moments from our
                latest underground events.
            </p>
        </div>
        <div
            class="flex items-center gap-2 bg-white dark:bg-slate-900 p-1.5 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 overflow-x-auto whitespace-nowrap scrollbar-hide">
            <button class="px-5 py-2 rounded-lg bg-primary text-white text-sm font-bold transition-all shrink-0">All</button>
            <button
                class="px-5 py-2 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 text-sm font-bold transition-all shrink-0">Illustration</button>
            <button
                class="px-5 py-2 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 text-sm font-bold transition-all shrink-0">Event</button>
            <button
                class="px-5 py-2 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 text-sm font-bold transition-all shrink-0">Poster</button>
        </div>
    </div>
    <!-- Masonry Grid -->
    <div class="masonry-grid">
        <!-- Item 1 -->
        <div class="masonry-item group relative overflow-hidden rounded-xl bg-slate-200 dark:bg-slate-800">
            <img class="w-full object-cover transition-transform duration-500 group-hover:scale-110"
                data-alt="Modern abstract illustration with vibrant blue and orange hues"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCXnCxM_xd7sX5Z_laWCzYApSAnewsQIKcFCOAWfV9m6zG0bN5hLSrHfs3kyJ_xp8DLQW5cc2vwRSx3DPoF902B97G1ONwi0UcOv2M16EYUSdlTK8kEiMlf7I5qGdLly1KXe3yO6aRicTgyprA0zHYuePh4MmLYTNJ6H9saw1Gv0_RjLqgzB7ISaPkJ8icpVPKpkdAz-v-mWLQdsI0vqG2kAkkWW2SBplGqaFdDTBRaNR7JrHNbHuSiZF-NBaXEE1dByZArz131Im-S" />
            <div
                class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                <span class="text-xs font-bold uppercase tracking-widest text-primary mb-2">Illustration</span>
                <h3 class="text-white text-lg font-bold">Dreamscape Vol. 4</h3>
                <p class="text-slate-300 text-sm line-clamp-2">Exploring the subconscious through digital ink and textures.
                </p>
            </div>
        </div>
        <!-- Item 2 -->
        <div class="masonry-item group relative overflow-hidden rounded-xl bg-slate-200 dark:bg-slate-800">
            <img class="w-full object-cover transition-transform duration-500 group-hover:scale-110"
                data-alt="People gathered at a cozy night-time poetry reading event"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCjnnr-YNSJ4Z7_FqqfvBit0nXzaG_Kyh-JYfKV7mPyLi6IabUG3sdNSlSy-sWsnRP8mBrbiBiyRYk_RTvarWZJoIXQ_jHlV_t-FGNOPH_t0M5NoJIUsVkHjzr-Hwb6ap4I6l4XIpGPDcVsbhxjU1-tBph71nrjmeSGUDts8vEr9quXuIas8u151bmzbB0MxWUGNl6FMqjb5ftkBC7H80nL0o2VXYgc95cWUth-mp-wT40F06bQbo6yy60RsK0z7iFmRhmAu4YwM7d4" />
            <div
                class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                <span class="text-xs font-bold uppercase tracking-widest text-primary mb-2">Event</span>
                <h3 class="text-white text-lg font-bold">Poetry in the Park</h3>
                <p class="text-slate-300 text-sm">Under the stars at the monthly collective gathering.</p>
            </div>
        </div>
        <!-- Item 3 -->
        <div class="masonry-item group relative overflow-hidden rounded-xl bg-slate-200 dark:bg-slate-800">
            <img class="w-full object-cover transition-transform duration-500 group-hover:scale-110"
                data-alt="Minimalist graphic design poster for a film festival"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBa87XrDNLdEeWtIGUGnlt4KUIfFZ4sR-k4rWePOo6sB78ZHLCw4odx3acnUhMsK_tjbCra8elnATyCHscQxE2O716rMvRvkFyJcZ8R5XONFB1wdbKGwBZ4EOWqBBxfozHneW2LDfAMeMttPcwd7TdGL4OlAIQK6Y906erAscCa_FXW47SvK6LfcWDx0P3Ev5o2ViwmXPMJuA8r_eJzOC9HSzfN5xh672OgxoABP0LqMSYjGKpyM_KTPMOntEe2Tb0smvO74hC5QOF1" />
            <div
                class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                <span class="text-xs font-bold uppercase tracking-widest text-primary mb-2">Poster</span>
                <h3 class="text-white text-lg font-bold">Indie Film Night</h3>
                <p class="text-slate-300 text-sm">Limited edition screen-print for the July showcase.</p>
            </div>
        </div>
        <!-- Item 4 -->
        <div class="masonry-item group relative overflow-hidden rounded-xl bg-slate-200 dark:bg-slate-800">
            <img class="w-full object-cover transition-transform duration-500 group-hover:scale-110"
                data-alt="Stack of hand-made zines with artistic covers"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBHL4D2a_-m1KzKGpGzyrpTE-M68tJPzE19G90Q9CtjxG20TUt9AZaR6TZvmYy95BdZaKa7mN5hGIOPu52bRxKiyksoen8dvOt7tcXjN8d6LCWsOvtxM57c7FGTdfhrA-uzkh8BxdDKFLy6kKAHhKGFvJURsjDYASpCT_Ehp1eyFjHi9t-fU1qZKT9pHoj84hcOHfnVK9jfhxXELA-G1JdC0e13s_O96k_TT7i86rZhSfSXdsyfs0j9jjFGa-PY8bicKd-iqFSC78hi" />
            <div
                class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                <span class="text-xs font-bold uppercase tracking-widest text-primary mb-2">Illustration</span>
                <h3 class="text-white text-lg font-bold">Paper Cuts #12</h3>
                <p class="text-slate-300 text-sm">A deep dive into tactile storytelling and collage.</p>
            </div>
        </div>
        <!-- Item 5 -->
        <div class="masonry-item group relative overflow-hidden rounded-xl bg-slate-200 dark:bg-slate-800">
            <img class="w-full object-cover transition-transform duration-500 group-hover:scale-110"
                data-alt="Live band performing at a dimly lit urban venue"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDjAT8goxn0a50nxaYy4M-QIW5Vpt8ESpKABOmDQjxx8rwyJ4v_f9EuJOaKiViS2x7bqR5W5Ie054w5c-b0fe7CtqWBzA0tUQpH8co4eoNG0XCT1PGUwmpUvrpbYky3PCT8vHG48g7XpXfV8u2-M64JS8k8yxYuLo5Mil6nylnnRAI31rGlMrokGrb3lO-eWHgGh5U5nAPPD5iKrBb-Xh2fEV_ORnhmiT1FT7JS9eaXKIBBwyyJE0lVyBM3fgcaI5DsMkkCw2uTGASJ" />
            <div
                class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                <span class="text-xs font-bold uppercase tracking-widest text-primary mb-2">Event</span>
                <h3 class="text-white text-lg font-bold">Basement Beats</h3>
                <p class="text-slate-300 text-sm">Snapshots from the synth-wave collective session.</p>
            </div>
        </div>
        <!-- Item 6 -->
        <div class="masonry-item group relative overflow-hidden rounded-xl bg-slate-200 dark:bg-slate-800">
            <img class="w-full object-cover transition-transform duration-500 group-hover:scale-110"
                data-alt="Colorful pop-art style illustration of a urban landscape"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAJUzskbn30Y9oELtwQDAw3VlxX7aubrTIMQ2FZpKyaEWdCvBujzQu9HnRziMZg1BwiiLqOwPfWBWnyKwyTgdt3Wer7kr06kPxDh0Zuzsmn1IP-xkn3QBHPZOXn8TlKmqsdZ1Frv9xY0dVPPQuIDjSk48o44Zr7jm7ZZOwiuKgyPyLFg5V9ifyXFxQ9sYmzliF2JzmaKutoRx-o4mhvbjSMMGCUSzkckz2xWnfJukUt167mItWLGl9OU05-1BxgeCn82oQga2cvVNSo" />
            <div
                class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                <span class="text-xs font-bold uppercase tracking-widest text-primary mb-2">Poster</span>
                <h3 class="text-white text-lg font-bold">City Vibrations</h3>
                <p class="text-slate-300 text-sm">Art print exploring the rhythmic nature of urban life.</p>
            </div>
        </div>
        <!-- Item 7 -->
        <div class="masonry-item group relative overflow-hidden rounded-xl bg-slate-200 dark:bg-slate-800">
            <img class="w-full object-cover transition-transform duration-500 group-hover:scale-110"
                data-alt="Close up of a hand drawing an intricate pattern"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAVl1g4X3Gf3ONfWPUk2onX11HLv7CdEX982Y06kaWxgFVyPcpz9_q7_7T7qeNqsn8Q_mGs_dA4cwXPLtN_SmOMJzyyY5VuQXftpTqVVUZdBEOxd-Qy3WWPjyNg4UCoqBVT0EXb4ZYDb5QC24DMUbOxf0kpKqZkSuwyFqzHifypi6K6ImNX3Y_yZHlaSljOkdFNxNHi9-EF58m6ZtQDjSx1HFK_DqQK04dE9a_1n56Eu6fy4jILWKyoNXyb2dCoz4iog_jurn4whgKv" />
            <div
                class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                <span class="text-xs font-bold uppercase tracking-widest text-primary mb-2">Illustration</span>
                <h3 class="text-white text-lg font-bold">Inktober Anthology</h3>
                <p class="text-slate-300 text-sm">30 days of relentless creativity and exploration.</p>
            </div>
        </div>
        <!-- Item 8 -->
        <div class="masonry-item group relative overflow-hidden rounded-xl bg-slate-200 dark:bg-slate-800">
            <img class="w-full object-cover transition-transform duration-500 group-hover:scale-110"
                data-alt="Bright yellow and black typography poster"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCWckZ0Tu8PGwuHRldxuoBvlTQrY0MFz_ajYxE7VyFj459k7VvhIlLUZugqE0fItmMUFSICzumEK1dkdwRtFmN5TJA0F8tslapLLg0Px8dtL1yYnb5dXN5wb7xczPvLjgtUbXNBWQaq5OV1o_dEATFFL3N0H2KkQYvtH-wSmI0exOSCnBzuzZGchIkcStWaKkVFis0Qq6IuBoBHEFQqmy-dUBKiCTxtJfGQI9DEAdAlq6GrxkQyynBgLgA2nwXVMJwMeeCu2y-ho-Pt" />
            <div
                class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                <span class="text-xs font-bold uppercase tracking-widest text-primary mb-2">Poster</span>
                <h3 class="text-white text-lg font-bold">Speak Loudly</h3>
                <p class="text-slate-300 text-sm">Visual manifesto on free speech and community voices.</p>
            </div>
        </div>
    </div>
    <!-- Pagination -->
    <div class="flex items-center justify-center mt-16 gap-2">
        <a class="flex size-10 items-center justify-center rounded-lg border border-slate-200 dark:border-slate-800 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors"
            href="#">
            <span class="material-symbols-outlined text-lg">chevron_left</span>
        </a>
        <a class="text-sm font-bold flex size-10 items-center justify-center text-white rounded-lg bg-primary"
            href="#">1</a>
        <a class="text-sm font-semibold flex size-10 items-center justify-center text-slate-600 dark:text-slate-400 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors"
            href="#">2</a>
        <a class="text-sm font-semibold flex size-10 items-center justify-center text-slate-600 dark:text-slate-400 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors"
            href="#">3</a>
        <span class="text-slate-400 px-2">...</span>
        <a class="text-sm font-semibold flex size-10 items-center justify-center text-slate-600 dark:text-slate-400 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors"
            href="#">12</a>
        <a class="flex size-10 items-center justify-center rounded-lg border border-slate-200 dark:border-slate-800 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors"
            href="#">
            <span class="material-symbols-outlined text-lg">chevron_right</span>
        </a>
    </div>
@endsection
