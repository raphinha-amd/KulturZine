<header class="sticky top-0 z-50 bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">

            <div class="flex-shrink-0 flex items-center gap-2 text-primary">
                <span class="material-symbols-outlined text-3xl font-bold">menu_book</span>
                <h1 class="text-slate-900 dark:text-slate-100 text-xl font-extrabold tracking-tight">KulturZine</h1>
            </div>

            <nav class="hidden lg:flex items-center gap-6 flex-1 justify-center font-bold">
                <a href="/" class="nav-item hover:text-primary transition-colors">Beranda</a>
                <a href="/tentang-kami" class="nav-item hover:text-primary transition-colors">Tentang Kami</a>
                <a href="/katalog-zine" class="nav-item hover:text-primary transition-colors">Katalog Zine</a>
                <a href="/artikel" class="nav-item hover:text-primary transition-colors">Artikel</a>
                <a href="/event" class="nav-item hover:text-primary transition-colors">Acara</a>
                <a href="/galeri" class="nav-item hover:text-primary transition-colors">Galeri</a>
            </nav>

            <div class="flex items-center gap-4">
                <button
                    class="hidden lg:block bg-primary hover:bg-primary/90 text-white px-5 py-2 rounded-lg text-sm font-bold transition-all shadow-sm">
                    Kirim Karya
                </button>

                <button id="menu-toggle" class="lg:hidden p-2 text-slate-600 dark:text-slate-300">
                    <span id="menu-icon" class="material-symbols-outlined text-2xl">menu</span>
                </button>
            </div>
        </div>
    </div>

    <div id="mobile-menu"
        class="hidden lg:hidden bg-white dark:bg-slate-900 border-t border-slate-100 dark:border-slate-800">
        <nav class="flex flex-col px-4 pt-2 pb-6 space-y-5 font-bold">
            <a href="/" class="nav-item hover:text-primary transition-colors">Beranda</a>
            <a href="/tentang-kami" class="nav-item hover:text-primary transition-colors">Tentang Kami</a>
            <a href="/katalog-zine" class="nav-item hover:text-primary transition-colors">Katalog Zine</a>
            <a href="/artikel" class="nav-item hover:text-primary transition-colors">Artikel</a>
            <a href="/event" class="nav-item hover:text-primary transition-colors">Acara</a>
            <a href="/galeri" class="nav-item hover:text-primary transition-colors">Galeri</a>
            <div class="pt-4 px-3">
                <button class="w-full bg-primary text-white py-3 rounded-xl font-bold text-sm">Kirim Karya</button>
            </div>
        </nav>
    </div>
</header>


<script>
    const btn = document.getElementById('menu-toggle');
    const menu = document.getElementById('mobile-menu');
    const icon = document.getElementById('menu-icon');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');

        if (menu.classList.contains('hidden')) {
            icon.textContent = 'menu';
        } else {
            icon.textContent = 'close';
        }
    });
</script>
