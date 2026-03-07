@extends('layout.app')
@section('content')
    <section
        class="relative overflow-hidden py-20 px-6 bg-white dark:bg-slate-900 p-12 rounded-3xl shadow-sm border border-slate-100 dark:border-slate-700">
        <div
            class="max-w-4xl mx-auto text-center relative z-10">
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
                    Menjadi episentrum gerakan literasi visual dan zine digital yang inklusif, memberdayakan setiap suara
                    unik di seluruh penjuru negeri untuk didengar.
                </p>
            </div>
            <div class="bg-white dark:bg-slate-800 p-8 rounded-2xl shadow-sm border border-slate-100 dark:border-slate-700">
                <div class="w-12 h-12 bg-blue-50 dark:bg-blue-900/30 rounded-lg flex items-center justify-center mb-6">
                    <span class="material-symbols-outlined text-[#1d81e2]">auto_awesome</span>
                </div>
                <h3 class="text-xl font-extrabold mb-3 text-slate-900 dark:text-white">Misi</h3>
                <p class="text-slate-600 dark:text-slate-400 leading-relaxed text-sm">
                    Menyediakan platform kolaboratif bagi penulis dan seniman, memfasilitasi pertukaran ide lintas disiplin,
                    dan mendemokratisasi akses terhadap publikasi mandiri.
                </p>
            </div>
        </div>
    </section>

    <section
        class="py-20 px-6 bg-white dark:bg-slate-900   rounded-3xl shadow-sm border border-slate-100 dark:border-slate-700">
        <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-center">
            <div class="relative">
                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuB-75xglXoaZIIKTkC8z9VqF9gcv_kJeKziGhZAF7C8Ms3Cos9MPgyO_5mAVrtESsITGe6aE8LFTyiRsnO55Sn3d-q63wLN_5tl-y0ltHGHdXI8X1sV_Jj0oKg1gDccPRNgBSs7Tpt-PQLh3babFS6ZBOFFGp4pPu9VF1wTxQ905oENmw1V82CEb8sP98t6jWY8EgMuvkQG12EnF4vSsvhlfIIRnrGQBXMrIkQWKsSsFHP2GZrwQTexykifAuS01146WkV9FGkGJrpx"
                    alt="Our Story" class="w-full aspect-square object-cover rounded-3xl shadow-xl">
            </div>
            <div class="space-y-6">
                <h2 class="text-3xl font-black text-slate-900 dark:text-white">Cerita Kami</h2>
                <div class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed space-y-4">
                    <p>Berawal dari sebuah meja kopi kecil di sudut kota pada tahun 2020, <span
                            class="font-bold">KulturZine</span> lahir dari kegelisahan akan terbatasnya ruang bagi kreator
                        independen untuk membagikan karya mereka tanpa batasan editorial yang kaku.</p>
                    <p>Kami percaya bahwa setiap coretan, puisi, dan esai memiliki rumahnya sendiri. Melalui pendekatan
                        digital yang tetap mempertahankan estetika "analog" dari sebuah zine, kami menghubungkan ribuan
                        pembaca dengan narasi-narasi segar.</p>
                    <p>Hari ini, <span class="font-bold">KulturZine</span> telah bertumbuh menjadi komunitas dinamis dengan
                        lebih dari 500 kontributor aktif. Kami adalah arsip hidup bagi kreativitas yang berani tampil beda.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 px-6 bg-slate-50/50 dark:bg-slate-900/50">
        <div class="max-w-6xl mx-auto text-center">
            <h2 class="text-3xl font-black mb-2 text-slate-900 dark:text-white">Di Balik Layar</h2>
            <p class="text-slate-500 text-sm mb-12">Tim kreatif yang menghidupkan ekosistem KulturZine setiap harinya.</p>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="flex flex-col items-center">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuB-75xglXoaZIIKTkC8z9VqF9gcv_kJeKziGhZAF7C8Ms3Cos9MPgyO_5mAVrtESsITGe6aE8LFTyiRsnO55Sn3d-q63wLN_5tl-y0ltHGHdXI8X1sV_Jj0oKg1gDccPRNgBSs7Tpt-PQLh3babFS6ZBOFFGp4pPu9VF1wTxQ905oENmw1V82CEb8sP98t6jWY8EgMuvkQG12EnF4vSsvhlfIIRnrGQBXMrIkQWKsSsFHP2GZrwQTexykifAuS01146WkV9FGkGJrpx"
                        class="w-24 h-24 md:w-32 md:h-32 rounded-full object-cover mb-4 border-4 border-white shadow-sm">
                    <h4 class="font-bold text-slate-900 dark:text-white">Asep</h4>
                    <p class="text-[#1d81e2] text-[10px] font-bold uppercase tracking-widest mt-1">Editor in Chief</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuB-75xglXoaZIIKTkC8z9VqF9gcv_kJeKziGhZAF7C8Ms3Cos9MPgyO_5mAVrtESsITGe6aE8LFTyiRsnO55Sn3d-q63wLN_5tl-y0ltHGHdXI8X1sV_Jj0oKg1gDccPRNgBSs7Tpt-PQLh3babFS6ZBOFFGp4pPu9VF1wTxQ905oENmw1V82CEb8sP98t6jWY8EgMuvkQG12EnF4vSsvhlfIIRnrGQBXMrIkQWKsSsFHP2GZrwQTexykifAuS01146WkV9FGkGJrpx"
                        class="w-24 h-24 md:w-32 md:h-32 rounded-full object-cover mb-4 border-4 border-white shadow-sm">
                    <h4 class="font-bold text-slate-900 dark:text-white">Asep</h4>
                    <p class="text-[#1d81e2] text-[10px] font-bold uppercase tracking-widest mt-1">Editor in Chief</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuB-75xglXoaZIIKTkC8z9VqF9gcv_kJeKziGhZAF7C8Ms3Cos9MPgyO_5mAVrtESsITGe6aE8LFTyiRsnO55Sn3d-q63wLN_5tl-y0ltHGHdXI8X1sV_Jj0oKg1gDccPRNgBSs7Tpt-PQLh3babFS6ZBOFFGp4pPu9VF1wTxQ905oENmw1V82CEb8sP98t6jWY8EgMuvkQG12EnF4vSsvhlfIIRnrGQBXMrIkQWKsSsFHP2GZrwQTexykifAuS01146WkV9FGkGJrpx"
                        class="w-24 h-24 md:w-32 md:h-32 rounded-full object-cover mb-4 border-4 border-white shadow-sm">
                    <h4 class="font-bold text-slate-900 dark:text-white">Asep</h4>
                    <p class="text-[#1d81e2] text-[10px] font-bold uppercase tracking-widest mt-1">Editor in Chief</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuB-75xglXoaZIIKTkC8z9VqF9gcv_kJeKziGhZAF7C8Ms3Cos9MPgyO_5mAVrtESsITGe6aE8LFTyiRsnO55Sn3d-q63wLN_5tl-y0ltHGHdXI8X1sV_Jj0oKg1gDccPRNgBSs7Tpt-PQLh3babFS6ZBOFFGp4pPu9VF1wTxQ905oENmw1V82CEb8sP98t6jWY8EgMuvkQG12EnF4vSsvhlfIIRnrGQBXMrIkQWKsSsFHP2GZrwQTexykifAuS01146WkV9FGkGJrpx"
                        class="w-24 h-24 md:w-32 md:h-32 rounded-full object-cover mb-4 border-4 border-white shadow-sm">
                    <h4 class="font-bold text-slate-900 dark:text-white">Asep</h4>
                    <p class="text-[#1d81e2] text-[10px] font-bold uppercase tracking-widest mt-1">Editor in Chief</p>
                </div>
            </div>
        </div>
    </section>

    <section
        class="py-20 px-6 bg-[#0f172a] text-white text-center relative overflow-hidden   rounded-3xl shadow-sm border border-slate-100 dark:border-slate-700">
        <div class="max-w-3xl mx-auto relative z-10">
            <h2 class="text-3xl md:text-4xl font-black mb-4">Bergabung dengan Komunitas</h2>
            <p class="text-slate-400 text-sm mb-10 max-w-xl mx-auto">
                Jadilah bagian dari revolusi publikasi independen. Kamu bisa berkontribusi sebagai volunteer atau kirimkan
                zine buatanmu sendiri.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button
                    class="bg-[#1d81e2] hover:bg-blue-600 text-white font-bold px-8 py-3 rounded-xl transition-all text-sm flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined text-sm">groups</span>
                    Gabung Volunteer
                </button>
                <button
                    class="bg-white/10 hover:bg-white/20 text-white border border-white/10 font-bold px-8 py-3 rounded-xl transition-all text-sm flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined text-sm">send</span>
                    Kirim Karya
                </button>
            </div>
        </div>
    </section>
@endsection
