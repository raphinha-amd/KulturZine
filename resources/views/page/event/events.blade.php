@extends('layout.app')
@section('content')
    <!-- Page Header -->
    <div
        class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-10 border-b border-slate-200 dark:border-slate-800 pb-8">
        <div class="max-w-2xl">
            <h1 class="text-slate-900 dark:text-slate-100 text-4xl md:text-5xl font-extrabold tracking-tight mb-3">Upcoming
                Community Events</h1>
            <p class="text-slate-600 dark:text-slate-400 text-lg leading-relaxed">Join us for a vibrant season of poetry
                readings, hands-on zine workshops, and local publishing fests. Explore the intersection of art and message.
            </p>
        </div>
       
    </div>
    <!-- Filters -->
    <div class="flex flex-wrap gap-3 mb-10 overflow-x-auto pb-2">
        <button class="flex items-center gap-2 px-4 py-2 bg-primary text-white rounded-full text-sm font-semibold shadow-md">
            <span class="material-symbols-outlined text-[18px]">calendar_today</span>
            <span>All Events</span>
            <span class="material-symbols-outlined text-[16px]">expand_more</span>
        </button>
        <button
            class="flex items-center gap-2 px-4 py-2 bg-white dark:bg-slate-800 text-slate-700 dark:text-slate-300 border border-slate-200 dark:border-slate-700 rounded-full text-sm font-semibold hover:border-primary transition-all">
            <span>Readings</span>
            <span class="material-symbols-outlined text-[16px]">expand_more</span>
        </button>
        <button
            class="flex items-center gap-2 px-4 py-2 bg-white dark:bg-slate-800 text-slate-700 dark:text-slate-300 border border-slate-200 dark:border-slate-700 rounded-full text-sm font-semibold hover:border-primary transition-all">
            <span>Workshops</span>
            <span class="material-symbols-outlined text-[16px]">expand_more</span>
        </button>
        <button
            class="flex items-center gap-2 px-4 py-2 bg-white dark:bg-slate-800 text-slate-700 dark:text-slate-300 border border-slate-200 dark:border-slate-700 rounded-full text-sm font-semibold hover:border-primary transition-all">
            <span>Zine Fests</span>
            <span class="material-symbols-outlined text-[16px]">expand_more</span>
        </button>
    </div>
    <!-- Featured Event Card -->
    <div class="mb-12 group cursor-pointer">
        <div
            class="flex flex-col lg:flex-row bg-white dark:bg-slate-900 rounded-2xl overflow-hidden shadow-xl border border-slate-200 dark:border-slate-800">
            <div class="lg:w-1/2 relative h-64 lg:h-auto overflow-hidden">
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                    data-alt="Diverse people at a zine fair"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDEj73o35q04ffOJ4ERwrC3GsgdouMUpiQMaesv8B_vtYE68lSPDWSTEt7PJgx8-zzhwrsIo0FQ5IfliiSuYizFsmQ8WdG0PFJyHVgs4wBr-qrKiICGgh8fyirRmaR4JQPI0d0UONhbaodP8NhNbn_FqDKtnCQIDEzx_51ZFov24Rw8_6pGqSBesC5tqDwtK4WSbv1GqYgBAZnF8Z5f7fFh9-_pDvm-CLcv9QE5Z5VYjDq3PQn3dhQP1Axt2znPzr6HG2y5tH6Tdl_D")'>
                </div>
                <div
                    class="absolute top-4 left-4 bg-primary text-white px-4 py-1 rounded-full text-xs font-bold uppercase tracking-widest shadow-lg">
                    Featured</div>
            </div>
            <div class="lg:w-1/2 p-8 md:p-10 flex flex-col justify-center">
                <div class="flex items-center gap-2 text-primary font-bold text-sm mb-3">
                    <span class="material-symbols-outlined text-[18px]">event</span>
                    <span>Saturday, July 15 • 10:00 AM</span>
                </div>
                <h2
                    class="text-3xl font-extrabold text-slate-900 dark:text-slate-100 mb-4 group-hover:text-primary transition-colors">
                    Summer Zine Symposium 2024</h2>
                <p class="text-slate-600 dark:text-slate-400 text-lg mb-6 line-clamp-2">A day-long immersive gathering of
                    independent creators, self-publishers, and paper lovers. Featuring panel discussions, live binding
                    demos, and over 50 vendors from across the country.</p>
                <div class="flex flex-wrap items-center gap-6 mb-8">
                    <div class="flex items-center gap-2 text-slate-500 dark:text-slate-400">
                        <span class="material-symbols-outlined">location_on</span>
                        <span class="text-sm">The Reading Room, Brooklyn</span>
                    </div>
                    <div class="flex items-center gap-2 text-slate-500 dark:text-slate-400">
                        <span class="material-symbols-outlined">group</span>
                        <span class="text-sm">82 spots available</span>
                    </div>
                </div>
                <div class="flex flex-wrap gap-4">
                    <button
                        class="bg-primary hover:bg-primary/90 text-white px-8 py-3 rounded-xl font-bold transition-all shadow-lg flex items-center gap-2">
                        <span>Volunteer Signup</span>
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </button>
                    <button
                        class="bg-slate-100 dark:bg-slate-800 hover:bg-slate-200 dark:hover:bg-slate-700 text-slate-900 dark:text-slate-100 px-8 py-3 rounded-xl font-bold transition-all">View
                        Details</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
        <!-- Card 1 -->
        <div
            class="bg-white dark:bg-slate-900 rounded-2xl overflow-hidden shadow-lg border border-slate-100 dark:border-slate-800 flex flex-col group">
            <div class="h-48 overflow-hidden relative">
                <div class="absolute inset-0 bg-cover bg-center group-hover:scale-110 transition-transform duration-500"
                    data-alt="Hands holding a handmade zine"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDeyAZj62zez7xZSbd3IaQ--9uXO9F-02BA5UFlzrZZiSX-gwSf_1eM1QWVkfBky-DTzproG36i7GaffXaRnFmj-YCgD8cREjiGTwNzZunJRkuKlYplVMbs-faDTjNoBirTtOknJ2W1MfkfipdrxkvS1Dby8KvMaEzdhxxyHiwbeJOqyNQR6Ak-ac37074SdO0x-uMPraBp2lHkpp2UC9y6xurFBtSwP42k3XmmIgj26Y9bnM055tH194JKQleh9M9T37BteDHecJpk")'>
                </div>
            </div>
            <div class="p-6 flex-1 flex flex-col">
                <div class="flex justify-between items-start mb-4">
                    <div class="bg-primary/10 text-primary px-3 py-1 rounded-lg text-xs font-bold uppercase">Workshop</div>
                    <span class="text-slate-500 dark:text-slate-400 text-sm font-medium">Aug 2, 2024</span>
                </div>
                <h3 class="text-xl font-bold text-slate-900 dark:text-slate-100 mb-2 leading-tight">Risograph Masterclass:
                    Layering Colors</h3>
                <p class="text-slate-600 dark:text-slate-400 text-sm mb-6 flex-1">Learn the art of risograph printing and
                    how to create stunning multi-colored zines with our resident artist.</p>
                <div class="flex items-center gap-2 text-slate-500 dark:text-slate-400 mb-6">
                    <span class="material-symbols-outlined text-[18px]">location_on</span>
                    <span class="text-xs">Inkwell Studio, Portland</span>
                </div>
                <button
                    class="w-full bg-primary/10 hover:bg-primary text-primary hover:text-white py-3 rounded-lg text-sm font-bold transition-all">
                    Volunteer Signup
                </button>
            </div>
        </div>
        <!-- Card 2 -->
        <div
            class="bg-white dark:bg-slate-900 rounded-2xl overflow-hidden shadow-lg border border-slate-100 dark:border-slate-800 flex flex-col group">
            <div class="h-48 overflow-hidden relative">
                <div class="absolute inset-0 bg-cover bg-center group-hover:scale-110 transition-transform duration-500"
                    data-alt="People listening to a reading in a cafe"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAnqVziH4fvcaqKo72eIr7LbpRvXhTAspg986__p_pkmeRLWcuIh3Kf8esOHR6zijxKbCmrgdPnuQre-01Lcux-rHnDERY0u7MPorw6v9p7kwklSi-1v5ZTXcn8rF6l2tIC7Ec0UwuAW4Zkh3nQeEqh6yhy2ZTNsALX722O99ro2BsXzFQCdfiHDOrOGgNub4d8Es37dpIiJcMiGUCm4MT3fHeT0xNDYRGYP-xkfhTRvlfXN682Rkc_LMpKBbAoZ_JIRMqIC8mMznK5")'>
                </div>
            </div>
            <div class="p-6 flex-1 flex flex-col">
                <div class="flex justify-between items-start mb-4">
                    <div
                        class="bg-emerald-100 dark:bg-emerald-900/30 text-emerald-600 dark:text-emerald-400 px-3 py-1 rounded-lg text-xs font-bold uppercase">
                        Reading</div>
                    <span class="text-slate-500 dark:text-slate-400 text-sm font-medium">Aug 12, 2024</span>
                </div>
                <h3 class="text-xl font-bold text-slate-900 dark:text-slate-100 mb-2 leading-tight">Poetry &amp;
                    Photocopies: Open Mic Night</h3>
                <p class="text-slate-600 dark:text-slate-400 text-sm mb-6 flex-1">A curated night of slam poetry and
                    experimental readings. Bring your latest zine to trade!</p>
                <div class="flex items-center gap-2 text-slate-500 dark:text-slate-400 mb-6">
                    <span class="material-symbols-outlined text-[18px]">location_on</span>
                    <span class="text-xs">The Bean &amp; Bind, Chicago</span>
                </div>
                <button
                    class="w-full bg-primary/10 hover:bg-primary text-primary hover:text-white py-3 rounded-lg text-sm font-bold transition-all">
                    Volunteer Signup
                </button>
            </div>
        </div>
        <!-- Card 3 -->
        <div
            class="bg-white dark:bg-slate-900 rounded-2xl overflow-hidden shadow-lg border border-slate-100 dark:border-slate-800 flex flex-col group">
            <div class="h-48 overflow-hidden relative">
                <div class="absolute inset-0 bg-cover bg-center group-hover:scale-110 transition-transform duration-500"
                    data-alt="Trestle tables covered in papers and art supplies"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuALW_riKc3KrXr4PCnAUfzsSGmdOqH2083rZPJvYPO-bdQB2nyzbNm4OB4E5rKyuNpWaBYPspvcievFW8kLhO4V4SEbCdODHcd7gfMAdlBwjJORoaGC7DxpVPbJ82Zx0TebFdAXkjsV09oHsKIIpEGBaV9x3zGoxINoH-VIKpXR4eUdvTNe-HaGwNvzsgeRdgw7CagQ5VcBPSRn_vi0Iux7s8XlnstK9-Atfiq6rdQoihTP-N5UTCexHRQwyIC8NF1ybQY67gXJN1T7")'>
                </div>
            </div>
            <div class="p-6 flex-1 flex flex-col">
                <div class="flex justify-between items-start mb-4">
                    <div
                        class="bg-amber-100 dark:bg-amber-900/30 text-amber-600 dark:text-amber-400 px-3 py-1 rounded-lg text-xs font-bold uppercase">
                        Community</div>
                    <span class="text-slate-500 dark:text-slate-400 text-sm font-medium">Aug 24, 2024</span>
                </div>
                <h3 class="text-xl font-bold text-slate-900 dark:text-slate-100 mb-2 leading-tight">Midnight Makers: Collage
                    Marathon</h3>
                <p class="text-slate-600 dark:text-slate-400 text-sm mb-6 flex-1">12 hours of non-stop zine making. We
                    provide the glue, scissors, and coffee. You bring the vision.</p>
                <div class="flex items-center gap-2 text-slate-500 dark:text-slate-400 mb-6">
                    <span class="material-symbols-outlined text-[18px]">location_on</span>
                    <span class="text-xs">Art Collective Hub, Seattle</span>
                </div>
                <button
                    class="w-full bg-primary/10 hover:bg-primary text-primary hover:text-white py-3 rounded-lg text-sm font-bold transition-all">
                    Volunteer Signup
                </button>
            </div>
        </div>
        <!-- Card 4 -->
        <div
            class="bg-white dark:bg-slate-900 rounded-2xl overflow-hidden shadow-lg border border-slate-100 dark:border-slate-800 flex flex-col group">
            <div class="h-48 overflow-hidden relative">
                <div class="absolute inset-0 bg-cover bg-center group-hover:scale-110 transition-transform duration-500"
                    data-alt="A library or archive room"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDzABa5J5UFkne_okZrgjeKNvPP3wFMMB5jTqohVBe38wYDnLhjE8Aj9719tsO8saA4_ApfP-fRID9v7Io1wa9towDn_JAyAxVSrE-b7t1_94u1-K0qQppZmN7nrRtz5KXtAc2JY3nybf2uU_ixmxIupVZ8v1nn2AD_jYrYr2XFtj1jpWr1AQmvRlHGR3fXhDe4paQaIZt2BiGOIBf6jwJfVtGc12d2R8YFsigoYKJ5xs_04FSXyw76XBD5_aE-IDwHUk-D_0mSvagz")'>
                </div>
            </div>
            <div class="p-6 flex-1 flex flex-col">
                <div class="flex justify-between items-start mb-4">
                    <div
                        class="bg-indigo-100 dark:bg-indigo-900/30 text-indigo-600 dark:text-indigo-400 px-3 py-1 rounded-lg text-xs font-bold uppercase">
                        Archiving</div>
                    <span class="text-slate-500 dark:text-slate-400 text-sm font-medium">Sept 5, 2024</span>
                </div>
                <h3 class="text-xl font-bold text-slate-900 dark:text-slate-100 mb-2 leading-tight">Preserving the
                    Underground: Archiving Workshop</h3>
                <p class="text-slate-600 dark:text-slate-400 text-sm mb-6 flex-1">Learn professional techniques to preserve
                    fragile paper media and digital archiving for modern zines.</p>
                <div class="flex items-center gap-2 text-slate-500 dark:text-slate-400 mb-6">
                    <span class="material-symbols-outlined text-[18px]">location_on</span>
                    <span class="text-xs">Main Public Library, Austin</span>
                </div>
                <button
                    class="w-full bg-primary/10 hover:bg-primary text-primary hover:text-white py-3 rounded-lg text-sm font-bold transition-all">
                    Volunteer Signup
                </button>
            </div>
        </div>
        <!-- Card 5 -->
        <div
            class="bg-white dark:bg-slate-900 rounded-2xl overflow-hidden shadow-lg border border-slate-100 dark:border-slate-800 flex flex-col group">
            <div class="h-48 overflow-hidden relative">
                <div class="absolute inset-0 bg-cover bg-center group-hover:scale-110 transition-transform duration-500"
                    data-alt="A laptop on a desk with a notebook"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCT7XdJoTyKBY8GJWxa5IN1GES3iUoBMn7hWWSRSku0ClzxHCXea738KsV9fEAdOC1FegwECFAGdhpidIpOhsBLIhjTixPuDJRvljHCRKOHWVAk9BvEX6uiIi3rKb_KjuWvDude0JFW0voob3SGO2emGjKMVaMwVVp1tm_RSvIOeUuR9w5sAg2QgytwrNa4-kDsM9iuTIkCnACw6FycN_BXJbWk77NVDmUyXSis9OKLE-8AzEyTnAX7sKym4rzqr1YfMKuSnvBK-HCG")'>
                </div>
            </div>
            <div class="p-6 flex-1 flex flex-col">
                <div class="flex justify-between items-start mb-4">
                    <div class="bg-primary/10 text-primary px-3 py-1 rounded-lg text-xs font-bold uppercase">Workshop</div>
                    <span class="text-slate-500 dark:text-slate-400 text-sm font-medium">Sept 14, 2024</span>
                </div>
                <h3 class="text-xl font-bold text-slate-900 dark:text-slate-100 mb-2 leading-tight">Digital Distribution
                    for Indie Creators</h3>
                <p class="text-slate-600 dark:text-slate-400 text-sm mb-6 flex-1">How to setup an online shop and
                    distribute your work globally without a traditional publisher.</p>
                <div class="flex items-center gap-2 text-slate-500 dark:text-slate-400 mb-6">
                    <span class="material-symbols-outlined text-[18px]">location_on</span>
                    <span class="text-xs">Virtual Event (Zoom)</span>
                </div>
                <button
                    class="w-full bg-primary/10 hover:bg-primary text-primary hover:text-white py-3 rounded-lg text-sm font-bold transition-all">
                    Volunteer Signup
                </button>
            </div>
        </div>
        <!-- Card 6 (Skeleton/Empty State Style) -->
        <div
            class="border-2 border-dashed border-slate-200 dark:border-slate-800 rounded-2xl flex flex-col items-center justify-center p-8 text-center bg-slate-50/50 dark:bg-slate-900/50">
            <div class="size-16 bg-slate-100 dark:bg-slate-800 rounded-full flex items-center justify-center mb-4">
                <span class="material-symbols-outlined text-slate-400 text-3xl">add</span>
            </div>
            <h3 class="text-lg font-bold text-slate-700 dark:text-slate-300 mb-2">Host an Event</h3>
            <p class="text-slate-500 dark:text-slate-400 text-sm mb-6">Have an idea for a workshop or a local zine meet-up?
            </p>
            <button class="text-primary font-bold hover:underline">Apply as a Host</button>
        </div>
    </div>
@endsection
