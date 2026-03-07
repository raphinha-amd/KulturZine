@extends('layout.app')
@section('content')
      <!-- Hero Section -->
        <section class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-24">
            <div class="flex flex-col gap-8">
                <div class="space-y-4">
                    <span
                        class="inline-block px-3 py-1 bg-primary/10 text-primary text-xs font-bold uppercase tracking-wider rounded-full">Komunitas
                        Kreatif Independen</span>
                    <h1 class="text-5xl md:text-6xl font-extrabold leading-[1.1] text-slate-900 dark:text-slate-50">
                        Ruang Baca Kolektif untuk <span class="text-primary">Suara Independen</span>
                    </h1>
                    <p class="text-lg text-slate-600 dark:text-slate-400 max-w-xl leading-relaxed">
                        Temukan berbagai zine menarik dari komunitas kreatif. Mari berbagi ide dan inspirasi lewat karya
                        cetak digital yang autentik dan berani.
                    </p>
                </div>
                <div class="flex flex-wrap gap-4">
                    <button
                        class="bg-primary text-white px-8 py-4 rounded-xl font-bold text-lg hover:shadow-lg hover:shadow-primary/20 transition-all flex items-center gap-2">
                        <span class="material-symbols-outlined">auto_stories</span>
                        Baca Zine
                    </button>
                    <button
                        class="bg-white dark:bg-slate-800 border-2 border-slate-100 dark:border-slate-700 text-slate-900 dark:text-slate-100 px-8 py-4 rounded-xl font-bold text-lg hover:bg-slate-50 dark:hover:bg-slate-700 transition-all">
                        Kirim Karya
                    </button>
                </div>
            </div>
            <div class="relative">
                <div class="absolute -top-4 -left-4 w-24 h-24 bg-primary/10 rounded-full blur-2xl"></div>
                <div class="absolute -bottom-4 -right-4 w-32 h-32 bg-primary/20 rounded-full blur-3xl"></div>
                <div
                    class="relative aspect-[4/3] rounded-2xl overflow-hidden shadow-2xl border-4 border-white dark:border-slate-800">
                    <div class="w-full h-full bg-cover bg-center"
                        data-alt="Minimalist bookshelf with modern independent zines"
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCAw7JB4U3DCFD_Z8rPRawEb2GK7by0KlUWDfpu9ecEvVCaf29ExslcVMio-58HIPY4JENRyNGiEcjhTeZ4uBfwOCJKO4zYzsGcYpWQ9k0q-7NmknHBB1fUC2ypa2iwuj89Rr2c4It-h1-_MjoFGFgYSZyaVOsGEFa0SqN5c9UArDDgzgOd_hnFn3d0rtYPZTDlKLiXr7Gd0DnGph7SJT5xxBG71Q0J2ITrVbJvfhgL914LCarYCS4WLakjxzu-DJ7J8MTmWBHT2Zp4')">
                    </div>
                </div>
            </div>
        </section>
        <!-- Featured Zine -->
        <section class="mb-24">
            <div class="flex items-center justify-between mb-8">
                <h2 class="text-3xl font-bold tracking-tight">Zine Pilihan Minggu Ini</h2>
                <a class="text-primary font-semibold flex items-center gap-1 hover:underline" href="#">Lihat Semua
                    <span class="material-symbols-outlined text-sm">arrow_forward</span></a>
            </div>
            <div
                class="bg-white dark:bg-slate-800 rounded-2xl overflow-hidden shadow-xl border border-slate-100 dark:border-slate-700 flex flex-col md:flex-row">
                <div class="md:w-1/2 aspect-[16/10] md:aspect-auto">
                    <div class="w-full h-full bg-cover bg-center" data-alt="Artistic cover of a city resonance zine"
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCvdtA3o0Dm5pEke4ONlk-wu6msHUu_yKHfad0NMUD8O97Z_5rOXdUeZZOgas-_iRetrhF1yp5u5V0BHcEE_lndewE8B5G3BAVMTJfP4McLdqw68oe-cI2csnBihUHWCi1dd6EuHQLTYN_1REIT8svhyFj0sIpX2bQajTDmKeK7KL17w_PzJcFPDHJtDtfhCmOKa5qKbgS2tJODkp4UtdrGpI3YekQgxiBFqJphE8Yh5YEvfRcxrZFgP8VmHSUC1ralv9fWLforJSP6')">
                    </div>
                </div>
                <div class="md:w-1/2 p-8 md:p-12 flex flex-col justify-center gap-6">
                    <div class="space-y-4">
                        <div class="flex gap-2">
                            <span
                                class="px-2 py-1 bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-300 text-[10px] font-bold uppercase rounded">Urban</span>
                            <span
                                class="px-2 py-1 bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-300 text-[10px] font-bold uppercase rounded">Esai</span>
                        </div>
                        <h3 class="text-3xl font-extrabold">Edisi Musim Gugur: Resonansi Kota</h3>
                        <p class="text-slate-600 dark:text-slate-400 leading-relaxed text-lg">
                            Kumpulan esai tajam dan ilustrasi eksperimental yang menangkap dinamika hidup di pusat
                            urban. Sebuah refleksi tentang kesepian dan keramaian.
                        </p>
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-slate-200" data-alt="Creator avatar"
                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAc7jmQW8R4XoZw0z8aAD3bbK0PRNInF0g2tqvdROlFbIvfpeZgSK0QJtlwAaqgKfHXIdzp1yfWEY2l9KuMRumRyLoIFEfr3_c_7r8LHgosP-_eqrl3yfAvSDPbFJsCJ2E0mVqWwpYKXTRnXHdbW98-e4Xe_ywMc-UEIggEJVLlg_N58mlpXFl4wAo-2ik5ItTXMlz7S2k1C-IVjwK6ZET7TzjYdDJKsyrPgfAY8Y1Bi5NsIU4mvKM_rrAtdD6nZlyr3q4eQIHTcRTY')">
                            </div>
                            <div>
                                <p class="font-bold text-sm">Kolektif Suara</p>
                                <p class="text-xs text-slate-500">Kolektif Seni Jakarta</p>
                            </div>
                        </div>
                    </div>
                    <button
                        class="w-fit bg-primary text-white px-6 py-3 rounded-lg font-bold hover:bg-primary/90 transition-all flex items-center gap-2">
                        <span class="material-symbols-outlined">menu_book</span>
                        Baca Selengkapnya
                    </button>
                </div>
            </div>
        </section>
        <!-- Categories Grid -->
        <section class="mb-24">
            <h2 class="text-3xl font-bold tracking-tight mb-10 text-center">Eksplorasi Kategori</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <!-- Opini -->
                <a class="group relative overflow-hidden rounded-2xl aspect-square bg-slate-900" href="#">
                    <div class="absolute inset-0 opacity-60 group-hover:scale-110 transition-transform duration-500 bg-cover bg-center"
                        data-alt="Abstract typewriter representing opinion section"
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDQ9ORh8kPlaPx5VvxCHZCYA6mkVs8kTO6BAYzotVVRuERol3OaB--i6c5E5qBdeKez6MyV5l2FS34ui-igRkXKXlH0Gb9Urz-GxDea7Frvom9Yv6GqEpk0zg8Psg1zVF3Ima8S79kYiUMdeU4u2eLOGRdfdyaxZ6L1rEuU63cuYnbPfJHQLJpfOnPOm6qA25myxu-zsO9-iMXEfAzwoieUedMQq7piDU7feDSjTrU6fMMwL8xQ0C6S1-betailGdufxgTo5_Psln1m')">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 to-transparent"></div>
                    <div class="absolute bottom-6 left-6">
                        <h4 class="text-white text-xl font-bold">Opini</h4>
                        <p class="text-white/70 text-sm">Suara Kritis</p>
                    </div>
                </a>
                <!-- Sastra -->
                <a class="group relative overflow-hidden rounded-2xl aspect-square bg-slate-900" href="#">
                    <div class="absolute inset-0 opacity-60 group-hover:scale-110 transition-transform duration-500 bg-cover bg-center"
                        data-alt="Close up of book pages for literature"
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBT3ecs3MYGhBJS1F1cNgnCYdYXxXCg30CyWS3QygC2-bGAcxScNf4xJdvTI0hwFbgH7BZFK2Anrjugl49Rhg4s-r42XM9JZ1YmS8NU3O1PXhgjzQp2bF5ZUKi5Cul-eFczr3vwxloBu2MSXAAaRcGVqTRVjNLWuTbnIXvUtJniZRRTHg2eGRRf2k6363bJWGOtz7CoSWzyuQuJBXXo_cQMiYvs9mBWAa4UfDxfjO5xfvsj8hPzuR_DcXDj0yWnrexHQr7unmBfa4EG')">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 to-transparent"></div>
                    <div class="absolute bottom-6 left-6">
                        <h4 class="text-white text-xl font-bold">Sastra</h4>
                        <p class="text-white/70 text-sm">Puisi &amp; Prosa</p>
                    </div>
                </a>
                <!-- Ilustrasi -->
                <a class="group relative overflow-hidden rounded-2xl aspect-square bg-slate-900" href="#">
                    <div class="absolute inset-0 opacity-60 group-hover:scale-110 transition-transform duration-500 bg-cover bg-center"
                        data-alt="Colorful paint brush strokes for illustration"
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuB10zm9a8E6Ekve63pWHpeTkyuBJVWRHuNEANUg7lhWF0T5SarU1YBlVOhzbGElLrp-_ls1QlTDo9qCBcTzNcgEC5FGmzDV1i3aivdXAJIT2gnaNGFElUr7cc0rBeXnuKYZNJx_gnyvc9sRbrzyro996UCI7ylNtMXvo_k51QdLcGNE_HZ0qKPMiuUI86dDISpMvLQeI481b9i-wH9UtKZ8PxDuEryE61F4P7Pk90QtsL-OaN0nfiZLPQy8enmZHmtY-yG3guh8fZHi')">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 to-transparent"></div>
                    <div class="absolute bottom-6 left-6">
                        <h4 class="text-white text-xl font-bold">Ilustrasi</h4>
                        <p class="text-white/70 text-sm">Visual &amp; Komik</p>
                    </div>
                </a>
                <!-- Kritik Sosial -->
                <a class="group relative overflow-hidden rounded-2xl aspect-square bg-slate-900" href="#">
                    <div class="absolute inset-0 opacity-60 group-hover:scale-110 transition-transform duration-500 bg-cover bg-center"
                        data-alt="Public demonstration silhouette for social critique"
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuClbcm_u9ANwI_Ff2KRQHLCI0AdzVP8u_Wv2ak2VfnYXMelw4ibJUZIyTAsEFWofSQdqHkXrEoVEgQgKctnceX7W5DOi4_6BNf0GDF5IrQmUvlOK3VX4ta-VYtmmXJj0yo0pR4Ep-YeatQ07TPlrcS9N5LfoHMmQ9iiB6Mu6ACOa-xY3UjSM1TVK69AnuAFjWHKsrIC1OGjf7QmBxPeCpAn11SagzDF7BJu2UMFmTbZGXb3UqE_ZjPphK2s__OLyBbwGRfrJ6a3zne2')">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 to-transparent"></div>
                    <div class="absolute bottom-6 left-6">
                        <h4 class="text-white text-xl font-bold">Kritik Sosial</h4>
                        <p class="text-white/70 text-sm">Isu Kontemporer</p>
                    </div>
                </a>
            </div>
        </section>
        <!-- Latest Blog & Events -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Blog Posts -->
            <div class="lg:col-span-2 space-y-8">
                <div class="flex items-center justify-between">
                    <h2 class="text-2xl font-bold tracking-tight">Catatan Redaksi</h2>
                    <a class="text-primary text-sm font-bold" href="#">Semua Artikel</a>
                </div>
                <div class="space-y-6">
                    <article class="flex gap-6 group cursor-pointer">
                        <div class="w-32 h-32 flex-shrink-0 overflow-hidden rounded-xl bg-slate-100">
                            <div class="w-full h-full bg-cover bg-center group-hover:scale-110 transition-transform"
                                data-alt="Stack of old papers for blog article"
                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCUGXKYkbsRGpBmRfta6l2N0xu5EWsMv2ZlIZAzTRkLYsk7gc9xM1Cc1IaLunRt8-zOg_aHbLqebcrYFUdBZuA37qTrx9urGhP4xzjbuednbyTRWBjUYHS7jKAHzYMtrzoUQYicYEpVM-qew0lUoq1ndOpFGgXOZB82EZBeKIShHVgGw7eNxhn63exQs_X6hstM2wv47bZ4PcQJ9o15yGPx3_avfeCW2EQc8dByg633QQ5ECFLFy1gkNtn5faOBOns_wqTJqdxXvLx1')">
                            </div>
                        </div>
                        <div class="space-y-2">
                            <p class="text-primary text-[10px] font-black uppercase tracking-widest">Wawasan</p>
                            <h3 class="text-xl font-bold group-hover:text-primary transition-colors">Kenapa Zine Cetak
                                Masih Relevan di Era Digital?</h3>
                            <p class="text-slate-500 text-sm line-clamp-2">Menelusuri kembali sejarah perlawanan lewat
                                kertas dan mesin fotokopi...</p>
                            <p class="text-slate-400 text-xs">12 Jan 2024 • 5 mnt baca</p>
                        </div>
                    </article>
                    <article
                        class="flex gap-6 group cursor-pointer border-t border-slate-100 dark:border-slate-800 pt-6">
                        <div class="w-32 h-32 flex-shrink-0 overflow-hidden rounded-xl bg-slate-100">
                            <div class="w-full h-full bg-cover bg-center group-hover:scale-110 transition-transform"
                                data-alt="Desk with notebooks and pens for writing tips"
                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBylV2bBHNP5rlbsSKAdcEKD9ZL3iUMEI5qXBR4QBioCC8QN9u1g69Fj5eOX1PdnPN-ruc-gphSwwcHaMcUfb2hqZ06xctGaXSgtnlGjh54El9qZxkEXBs1EJwjdXY7Pv0hhLHu5HbuOEIgXs_lMr72RZKc2mtF08BWB8PhTtSrWEyeVAAFq-tVosHB26Rs8U6Xp9C0utBIlTaVH-VJLt0XPa61N295Ll12P6scDrcTF7X-0WBWwlA2JAf5lUBKcByuQYEXanKjBSv3')">
                            </div>
                        </div>
                        <div class="space-y-2">
                            <p class="text-primary text-[10px] font-black uppercase tracking-widest">Tutorial</p>
                            <h3 class="text-xl font-bold group-hover:text-primary transition-colors">Memulai Zine
                                Pertama Anda: Panduan Praktis</h3>
                            <p class="text-slate-500 text-sm line-clamp-2">Tips memilih layout, kertas, dan cara
                                mendistribusikan karya secara mandiri.</p>
                            <p class="text-slate-400 text-xs">08 Jan 2024 • 8 mnt baca</p>
                        </div>
                    </article>
                </div>
            </div>
            <!-- Upcoming Events -->
            <div class="space-y-8">
                <h2 class="text-2xl font-bold tracking-tight">Agenda Mendatang</h2>
                <div class="space-y-4">
                    <div class="bg-primary/5 dark:bg-primary/10 p-5 rounded-2xl border border-primary/10">
                        <div class="flex gap-4">
                            <div
                                class="bg-primary text-white w-14 h-14 rounded-lg flex flex-col items-center justify-center flex-shrink-0">
                                <span class="text-lg font-bold">20</span>
                                <span class="text-[10px] font-bold uppercase">Jan</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900 dark:text-slate-100">Workshop: Kolase Analog</h4>
                                <p class="text-sm text-slate-500 mb-2">Pukul 14:00 - Galeri Ruang Bawah</p>
                                <button class="text-primary text-xs font-bold flex items-center gap-1">Daftar Sekarang
                                    <span class="material-symbols-outlined text-xs">arrow_outward</span></button>
                            </div>
                        </div>
                    </div>
                    <div
                        class="bg-slate-50 dark:bg-slate-800/50 p-5 rounded-2xl border border-slate-100 dark:border-slate-800">
                        <div class="flex gap-4">
                            <div
                                class="bg-slate-200 dark:bg-slate-700 text-slate-600 dark:text-slate-300 w-14 h-14 rounded-lg flex flex-col items-center justify-center flex-shrink-0">
                                <span class="text-lg font-bold">28</span>
                                <span class="text-[10px] font-bold uppercase">Jan</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900 dark:text-slate-100">Diskusi: Kebebasan Berekspresi
                                </h4>
                                <p class="text-sm text-slate-500 mb-2">Pukul 19:00 - Live on Instagram</p>
                                <button class="text-primary text-xs font-bold flex items-center gap-1">Simpan Jadwal
                                    <span class="material-symbols-outlined text-xs">notifications</span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-slate-900 dark:bg-primary p-6 rounded-2xl text-white relative overflow-hidden">
                    <div class="relative z-10">
                        <h4 class="text-xl font-bold mb-2">Punya karya zine?</h4>
                        <p class="text-white/80 text-sm mb-4">Ayo bagikan perspektifmu kepada ribuan pembaca lainnya.
                        </p>
                        <button class="bg-white text-slate-900 px-4 py-2 rounded-lg text-sm font-bold w-full">Kirim
                            Karya Sekarang</button>
                    </div>
                    <span
                        class="material-symbols-outlined absolute -bottom-4 -right-4 text-white/10 text-9xl">upload_file</span>
                </div>
            </div>
        </div>
@endsection