@extends('layout.app')
@section('content')
    <article class="max-w-4xl mx-auto px-6 py-10">
        <!-- Breadcrumbs -->
        <nav class="flex items-center gap-2 mb-8 text-sm font-medium text-slate-500 dark:text-slate-400">
            <a class="hover:text-primary" href="#">Home</a>
            <span class="material-symbols-outlined text-xs">chevron_right</span>
            <a class="hover:text-primary" href="#">Blog</a>
            <span class="material-symbols-outlined text-xs">chevron_right</span>
            <span class="text-slate-900 dark:text-slate-100 truncate">The Art of Risograph</span>
        </nav>
        <!-- Article Header -->
        <header class="mb-12">
            <h1 class="text-4xl md:text-6xl font-black text-slate-900 dark:text-white mb-8 tracking-tight leading-[1.1]">
                The Art of Risograph: Why Community Zines are Making a Comeback
            </h1>
            <div class="flex items-center justify-between border-y border-slate-200 dark:border-slate-800 py-6">
                <div class="flex items-center gap-4">
                    <div class="h-14 w-14 rounded-full bg-cover bg-center ring-2 ring-primary/20"
                        data-alt="Portrait of Elena Rossi, the author"
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDlP5Ytztp_OsdGJS-YcP0fBqHupGf6QJWgSxMBGaVIaGpWJOPE0oVSx-eIq4_rvfZKWrSVBFtGTMw6CNoVw4vkV0c2enybfyzJ0-E2S255oyd0yKwFLoM9kDEwAYc23tbazxsL2-ya-ieibYiHvtFV3OnCMZCfJO0sM2Ag8_ezdPCSpp3QiCw9pjZJd7wYcc-psw_DhFmltPV2MVegqTwCDR1Zaad-HjGKR_8leGHLZZhiMiKkl2zw14AjKqJ3gl7IBk2lw5pDKoav')">
                    </div>
                    <div>
                        <p class="text-lg font-bold text-slate-900 dark:text-white">Elena Rossi</p>
                        <div class="flex items-center gap-3 text-sm text-slate-500 dark:text-slate-400">
                            <span>Oct 12, 2023</span>
                            <span class="size-1 bg-slate-300 dark:bg-slate-600 rounded-full"></span>
                            <span>8 min read</span>
                        </div>
                    </div>
                </div>
                <div class="flex gap-2">
                    <button
                        class="p-2 rounded-full border border-slate-200 dark:border-slate-800 hover:bg-primary/10 hover:text-primary transition-colors">
                        <span class="material-symbols-outlined text-xl">share</span>
                    </button>
                    <button
                        class="p-2 rounded-full border border-slate-200 dark:border-slate-800 hover:bg-primary/10 hover:text-primary transition-colors">
                        <span class="material-symbols-outlined text-xl">bookmark</span>
                    </button>
                </div>
            </div>
        </header>
        <!-- Hero Image -->
        <figure class="mb-12">
            <div class="aspect-video w-full rounded-xl bg-cover bg-center shadow-2xl"
                data-alt="Close up of a vibrant risograph printing process"
                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCWHjZlhaqPqxRbZcNFAFNMMAQpaN49dhRmp2s2xTg9MwMIsP3obGDcDEsxXACvHY-yY84OfbzuQnOFzhTNXc_x60O9K4l7xO3iiwjUgPsu7FzNpvYFd7Ju3OfbpqRnX_n0AooO5TveoIMJkX46btEK50PXfT4yv09KsEurBQ7YiSXGnnUjSfwAxPils7tCneENfKqwkdD8xJx-hVO5qvAa8tUnnAJ2apA4mQxj6gjVlGTawpExvpTEyl8jIsvmkBF2mWdRhVZ9lLUq')">
            </div>
            <figcaption class="mt-4 text-center text-sm text-slate-500 italic">Risograph printing allows for unique textures
                and vibrant spot colors that digital printing cannot replicate.</figcaption>
        </figure>
        <!-- Content Body -->
        <div class="prose prose-lg prose-slate dark:prose-invert max-w-none">
            <p
                class="text-xl leading-relaxed text-slate-700 dark:text-slate-300 first-letter:text-6xl first-letter:font-bold first-letter:text-primary first-letter:mr-3 first-letter:float-left mb-8">
                Wn an increasingly digital age, the tactile nature of zines has seen a massive resurgence. Among the various
                methods of production, Risograph printing stands out as a community favorite. It’s a medium that perfectly
                balances the precision of digital layouts with the charming unpredictability of screen printing.
            </p>
            <h2 class="text-3xl font-extrabold text-slate-900 dark:text-white mt-12 mb-6">The Aesthetic of Imperfection</h2>
            <p class="mb-6 leading-loose">
                The Risograph was originally designed for high-volume copying in schools and churches, but it has been
                co-opted by the global artist community. Why? Because of its unique "soy-based" inks and the way colors
                overlap to create new hues. Unlike the clinical perfection of a laser printer, the Riso produces grain,
                slight misregistrations, and vibrant "fluorescents" that scream authenticity.
            </p>
            <blockquote class="my-12 pl-8 border-l-4 border-primary italic">
                <p class="text-2xl font-medium text-slate-800 dark:text-slate-200 leading-relaxed">
                    "The Zine is a space where the gatekeepers don't exist. It's the purest form of democratic expression we
                    have left in the physical world."
                </p>
                <cite class="block mt-4 not-italic font-bold text-primary">— Marcus Thorne, Zine Collector</cite>
            </blockquote>
            <h2 class="text-3xl font-extrabold text-slate-900 dark:text-white mt-12 mb-6">Building Community Through Ink
            </h2>
            <p class="mb-6 leading-loose">
                Beyond the tech, it’s about the people. Riso studios often operate as collectives. In cities like Berlin,
                Portland, and Tokyo, these spaces serve as hubs for workshops, release parties, and political organizing.
                When you hold a riso-printed zine, you're holding a piece of a local ecosystem.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 my-10">
                <div class="aspect-square rounded-lg bg-cover bg-center"
                    data-alt="Stack of colorful independent zines on a table"
                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAMl2cUFH-7NbF1DiUzol9F0NDuznxorxvWCfxG9qtoJsIvYDvkwIW8avnJeHJz-FMUlgKXoM81CFkxdQV6lHr3rB3iwwo_xQtaihjIPN8Pf3SfkjsPhoqOwb2yrsLHiPaNaMG1UX0PXgaqyWvECmtWpIhruVH5d7S5bewgUHg_vdEepPc496EIqp5VLVR9opgi1HIHy1-dc7LAKsrBJVmO4i49goTiFnosQUL21-u9cF1nKp72beFWnrUowlAZuMG1J6KLf3_iMUOE')">
                </div>
                <div class="aspect-square rounded-lg bg-cover bg-center"
                    data-alt="Artist working in a messy studio with ink tubes"
                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAbHOgIAhSgLchidvEKrWJvTl_ighBID6dFkVsV0zMf_z718OiqduXLhqDSTTpn0JQ9MQUbalMevkiYDRV2lU6opBHjkw8IPM_cmAJz7P-XXqMyueOZUPsvc8OU9Y7Rt2vDI57ch9wnBBIzov0ELeSV-_p0QAavaU4hAV5gQw6y2DtdqtpFKV2meados70Ypm3dVBLYgB8RvK-dKKpllZ92ra3rbpa_oWilP6sfgDj8Wv6aTOTLn_AxSPKRWEU976S5dfuBSFn5PO8M')">
                </div>
            </div>
            <h3 class="text-2xl font-bold text-slate-900 dark:text-white mt-10 mb-4">How to Get Started</h3>
            <p class="mb-6 leading-loose">
                Starting your own zine project doesn't require a $10,000 machine. Many studios offer "open access" hours
                where you can bring your PDF on a thumb drive and start printing. The key is to experiment with layers—think
                of it like building a sandwich of color.
            </p>
        </div>
        <!-- Footer Article Info -->
        <footer class="mt-16 pt-10 border-t border-slate-200 dark:border-slate-800">
            <div class="flex flex-wrap gap-2 mb-10">
                <span
                    class="px-3 py-1 bg-slate-100 dark:bg-slate-800 rounded-full text-xs font-bold text-slate-600 dark:text-slate-400">#Risograph</span>
                <span
                    class="px-3 py-1 bg-slate-100 dark:bg-slate-800 rounded-full text-xs font-bold text-slate-600 dark:text-slate-400">#DIYCulture</span>
                <span
                    class="px-3 py-1 bg-slate-100 dark:bg-slate-800 rounded-full text-xs font-bold text-slate-600 dark:text-slate-400">#PrintMaking</span>
            </div>
            <div class="bg-primary/5 dark:bg-primary/10 p-8 rounded-xl flex flex-col md:flex-row items-center gap-8">
                <div class="size-24 rounded-full bg-cover bg-center shrink-0" data-alt="Author profile picture"
                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBA_DI4vrzriwBJg5OpohzfTolRkE6WmO57DYOJ0zBjbDfHZ9_5D6H9EQmGHNVRC6rQy5hlk922Q-ZoRiFkBg2PfJunCHz3qamelPcSKw2-4ZWcHxlRMg6XOmzJp3OQ-Ii2d3MpRPPqcctjF4WmA8tBZjvQeN-2fy0h7nynJ0zuJwTDobYT6teaaY3ewij8XKBjZGOChaY6Lm2saNBXwVXzbPzkmEtp2TfeGWEM08ZHsmm-iAhyaRmQbS0LLDiUoRPaBYsS29qi86nm')">
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-2">About Elena Rossi</h4>
                    <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed mb-4">
                        Elena is a printmaker and curator based in Milan. She has spent the last decade documenting
                        independent publishing movements across Europe and runs the 'Ink &amp; Paper' collective.
                    </p>
                    <div class="flex gap-4">
                        <a class="text-primary font-bold text-sm" href="#">Follow on Twitter</a>
                        <a class="text-primary font-bold text-sm" href="#">View Portfolio</a>
                    </div>
                </div>
            </div>
        </footer>
    </article>
    <!-- Related Articles -->
    <section class="bg-white dark:bg-background-dark/50 py-20 border-t rounded-lg border-slate-200 dark:border-slate-800">
        <div class="max-w-6xl mx-auto px-6">
            <div class="flex items-center justify-between mb-12">
                <h2 class="text-3xl font-black tracking-tight">Related Articles</h2>
                <a class="text-primary font-bold flex items-center gap-2 hover:underline" href="#">
                    View Blog
                    <span class="material-symbols-outlined">arrow_forward</span>
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="group cursor-pointer">
                    <div class="aspect-[4/3] rounded-xl bg-cover bg-center mb-4 transition-transform group-hover:scale-[1.02]"
                        data-alt="Abstract colorful graphic design"
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDNtgOYK5Vni2oCHk455JPdVqoI_5S3ZFUp9jwvcCrScPB77W2R-5aFBtxesqtrdM7DdjHAJvDk9I1K9bnxRhoq-zH5996YnByX1R5__dPed0_gAy5Ma_ejn_zSMwD5b-wK1HrTRQ546U50_qXUigYLu9i3bCk2ZT2qYSv2GBA1SGBJOFXyNYapXyA-IGb50pUWgMqySpT3Dn0VhJpQ5jwDBwP19YX6vgv5OGeYoJz6Pn3zi4koaaX0j-bA-lqd2OAldYXEomUA8LB7')">
                    </div>
                    <span class="text-primary font-bold text-xs uppercase tracking-widest">Tutorials</span>
                    <h3 class="text-xl font-extrabold mt-2 group-hover:text-primary transition-colors">Digital to Analog:
                        Preparing Your Files for Riso</h3>
                </div>
                <!-- Card 2 -->
                <div class="group cursor-pointer">
                    <div class="aspect-[4/3] rounded-xl bg-cover bg-center mb-4 transition-transform group-hover:scale-[1.02]"
                        data-alt="Shelves of books and zines"
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDyKqocGAUkyWbNgT_9AZMlcnYFgxcbRoTZHgDo2vMobJDXagSiUxuTREZGp2JECfpLcRAhdyMUDablr0J66CEEnDaLvPa-dA8xPyhKwQP9L9WJTWG80_kxzbz1BZbmh2Pci9e5f-Ypek8oA_uNYqlCh4fzzmnzHXcxrfU9BqJ1umTzQGYrZOFb-6BZLlW26U2N8bfMy6FaIft4wnFtdUYq0duuBkzbnKS7iA7WWHE8hTW7_nUhfSF3KS3z9Vt6i28JxfesUFCjT9fN')">
                    </div>
                    <span class="text-primary font-bold text-xs uppercase tracking-widest">Interviews</span>
                    <h3 class="text-xl font-extrabold mt-2 group-hover:text-primary transition-colors">10 Independent
                        Bookstores Every Zine Lover Must Visit</h3>
                </div>
                <!-- Card 3 -->
                <div class="group cursor-pointer">
                    <div class="aspect-[4/3] rounded-xl bg-cover bg-center mb-4 transition-transform group-hover:scale-[1.02]"
                        data-alt="Hands holding a mini zine"
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCPZyWMOrUzUSFX3tBuhzkYdN_iKhjrge_gkp2hSLGXwKuq8VOXncXSmeV7P0gbxy6C3Vk9aLYBk3j4zWiSiGUC-HtnukJMRMVtQlHD3XmvFNq84aYjwez0e4klloj30klsenKpj2juhPMwbmtYMEdOKI9JXsw2vsRrg9Dz1N74gE2i9gRQ3da5T_-z7yuor2BdydBGByaMQlmBdSpeO4WCAQvgFsSqTm7xTMB4BCDM_zkdYrcvwavV-YPsdwphIxfonprNr_2EGBJI')">
                    </div>
                    <span class="text-primary font-bold text-xs uppercase tracking-widest">Culture</span>
                    <h3 class="text-xl font-extrabold mt-2 group-hover:text-primary transition-colors">The Political History
                        of Subversive Pamphlets</h3>
                </div>
            </div>
        </div>
    </section>
@endsection
