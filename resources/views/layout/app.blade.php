<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'KulturZine - Komunitas Baca & Zine Sukabumi')</title>
    <meta name="description" content="@yield('meta_description', 'KulturZine adalah platform kolektif zine dan ruang baca independen di Kota Sukabumi. Temukan karya literasi alternatif di sini.')" />
    <meta name="keywords" content="Zine Sukabumi, Komunitas Baca, Literasi Sukabumi, KulturZine, Zine Indonesia" />
    <meta name="author" content="KulturZine" />

    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title', 'KulturZine - Komunitas Baca & Zine Sukabumi')" />
    <meta property="og:description" content="@yield('meta_description', 'Platform kolektif zine dan ruang baca independen di Kota Sukabumi.')" />
    <meta property="og:image" content="@yield('og_image', asset('images/default-share.jpg'))" />
    <meta property="og:url" content="{{ url()->current() }}" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="@yield('title', 'KulturZine - Komunitas Baca & Zine Sukabumi')" />

    <link rel="canonical" href="{{ url()->current() }}" />

    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    @vite('resources/css/app.css')

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />

    @stack('styles')
</head>

<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100 min-h-screen">

    @include('layout.navbar')

    <main role="main" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 md:py-16">
        @yield('content')
    </main>

    @include('layout.footer')

    @stack('scripts')

    <script>
        // Script menu toggle kamu sudah oke
        const btn = document.getElementById('menu-toggle');
        const menu = document.getElementById('mobile-menu');
        const icon = document.getElementById('menu-icon');

        if (btn) {
            btn.addEventListener('click', () => {
                const isHidden = menu.classList.toggle('hidden');
                icon.textContent = isHidden ? 'menu' : 'close';
            });
        }
    </script>
</body>

</html>
