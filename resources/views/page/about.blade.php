@extends('layout.app')
@section('content')
    <section
        class="relative overflow-hidden py-20 px-6 bg-white dark:bg-slate-900 p-12 rounded-3xl shadow-sm border border-slate-100 dark:border-slate-700">
        <div class="max-w-4xl mx-auto text-center relative z-10">
            <span class="text-[#1d81e2] font-bold tracking-[0.2em] uppercase text-[10px] mb-4 block">Manifesto Kami</span>
            <h1 class="text-slate-900 dark:text-slate-100 text-5xl md:text-6xl font-black leading-tight tracking-tight mb-6">
                Tentang Kami
            </h1>
            <p class="text-slate-500 dark:text-slate-400 text-lg md:text-xl font-medium leading-relaxed max-w-2xl mx-auto">
                Membangun ruang aman bagi kata-kata dan visual untuk bertumbuh bersama komunitas kreatif independen.
            </p>
        </div>
    </section>

    <section class="py-16 px-6 bg-slate-50/50 dark:bg-slate-900/50 ">
        <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-6">
            <div class="bg-white dark:bg-slate-800 p-8 rounded-2xl shadow-sm border border-slate-100 dark:border-slate-700">
                <div class="w-12 h-12 bg-blue-50 dark:bg-blue-900/30 rounded-lg flex items-center justify-center mb-6">
                    <span class="material-symbols-outlined text-[#1d81e2]">visibility</span>
                </div>
                <h3 class="text-xl font-extrabold mb-3 text-slate-900 dark:text-white">Visi</h3>
                <p class="text-slate-600 dark:text-slate-400 leading-relaxed text-sm">
                    Mewujudkan ruang intelektual yang bebas, inklusif, dan progresif bagi mahasiswa dalam mengekspresikan
                    ide dan membangun kesadaran sosial.
                </p>
            </div>
            <div class="bg-white dark:bg-slate-800 p-8 rounded-2xl shadow-sm border border-slate-100 dark:border-slate-700">
                <div class="w-12 h-12 bg-blue-50 dark:bg-blue-900/30 rounded-lg flex items-center justify-center mb-6">
                    <span class="material-symbols-outlined text-[#1d81e2]">auto_awesome</span>
                </div>
                <h3 class="text-xl font-extrabold mb-3 text-slate-900 dark:text-white">Misi</h3>
                <ul class="text-slate-600 dark:text-slate-400 leading-relaxed text-sm space-y-2">
                    <li class="flex gap-3">
                        <span class="text-[#1d81e2] font-bold">•</span>
                        <span>Menjadi ruang aman untuk menyampaikan ide tanpa diskriminasi</span>
                    </li>
                    <li class="flex gap-3">
                        <span class="text-[#1d81e2] font-bold">•</span>
                        <span>Mendorong budaya literasi & berpikir kritis</span>
                    </li>
                    <li class="flex gap-3">
                        <span class="text-[#1d81e2] font-bold">•</span>
                        <span>Menerbitkan zine sebagai media alternatif mahasiswa</span>
                    </li>
                    <li class="flex gap-3">
                        <span class="text-[#1d81e2] font-bold">•</span>
                        <span>Mengadakan diskusi lintas disiplin ilmu</span>
                    </li>
                    <li class="flex gap-3">
                        <span class="text-[#1d81e2] font-bold">•</span>
                        <span>Membuka kolaborasi dengan komunitas kampus lain</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section
        class="py-20 px-6 bg-white dark:bg-slate-900 rounded-3xl shadow-sm border border-slate-100 dark:border-slate-700">
        <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-center">
            <div class="relative">
                <img src="{{ asset('assets/about-us.jpeg') }}" alt="Our Story"
                    class="w-full aspect-square object-cover rounded-3xl shadow-xl">
            </div>
            <div class="space-y-6">
                <h2 class="text-3xl font-black text-slate-900 dark:text-white">Cerita Kami</h2>
                <div class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed space-y-4">
                    <p>Kultur Zine merupakan sebuah komunitas kolektif kreatif yang bergerak di bidang sosial, teknologi,
                        dan pendidikan. Komunitas ini lahir secara organik dari inisiatif para pemuda dan pemudi yang
                        memiliki kesadaran tinggi terhadap lingkungan sekitarnya. Dengan semangat kolaborasi dan kepedulian,
                        Kultur Zine hadir sebagai wadah untuk berbagi ide, pengetahuan, serta menciptakan dampak positif
                        melalui berbagai kegiatan yang inovatif dan berkelanjutan.</p>
                    <p>Kultur Zine berawal dari kepedulian terhadap kondisi lingkungan sosial yang masih minim fasilitas
                        untuk pengembangan diri serta terbatasnya ruang berekspresi yang bebas dari persuasi dan
                        eksploitasi.</p>
                    <p>Inisiatif ini pertama kali digagas oleh Ragil Muhammad, mahasiswa Fakultas Hukum angkatan 2025,
                        dengan tujuan menghadirkan ruang diskusi yang terbuka, kritis, dan konstruktif di lingkungannya.
                        Ruang ini dirancang sebagai wadah bagi pemuda untuk bertukar gagasan, memperluas wawasan, dan
                        mengembangkan potensi secara mandiri.</p>
                    <p>Seiring berjalannya waktu, inisiatif tersebut berkembang menjadi sebuah gerakan kolektif yang lebih
                        luas. Kultur Zine tidak hanya berfokus pada diskusi, tetapi juga mendorong kolaborasi lintas bidang
                        yang melahirkan berbagai inovasi di sektor sosial, teknologi, dan pendidikan.</p>
                    <p>Saat ini, Kultur Zine hadir sebagai platform kreatif yang berkomitmen untuk menciptakan ruang yang
                        inklusif, mendorong pertumbuhan, serta memberikan dampak nyata bagi masyarakat.</p>
                </div>
            </div>
        </div>
    </section>
    <section
        class="mt-12 py-20 px-6 bg-[#0f172a] text-white text-center relative overflow-hidden rounded-3xl shadow-sm border border-slate-100 dark:border-slate-700">
        <div class="max-w-3xl mx-auto relative z-10">
            <h2 class="text-3xl md:text-4xl font-black mb-4">Bergabung dengan Komunitas</h2>
            <p class="text-slate-400 text-sm mb-10 max-w-xl mx-auto">
                Jadilah bagian dari revolusi publikasi independen. Kamu bisa berkontribusi sebagai volunteer atau kirimkan
                zine buatanmu sendiri.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/event"
                    class="bg-[#1d81e2] hover:bg-blue-600 text-white font-bold px-8 py-3 rounded-xl transition-all text-sm flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined text-sm">groups</span>
                    Gabung Volunteer
                </a>
                <a href="http://bit.ly/4syZuKw" target="_blank"
                    class="bg-white/10 hover:bg-white/20 text-white border border-white/10 font-bold px-8 py-3 rounded-xl transition-all text-sm flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined text-sm">send</span>
                    Kirim Karya
                </a>
            </div>
        </div>
    </section>
@endsection
