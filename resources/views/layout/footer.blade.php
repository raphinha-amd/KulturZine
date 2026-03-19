 <footer class="bg-white dark:bg-background-dark border-t border-slate-200 dark:border-slate-800 mt-24 py-16">
     <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
         <div class="grid grid-cols-1 lg:grid-cols-4 gap-12">
             <div class="space-y-4">
                 <div class="flex items-center gap-2 text-primary">
                     <span class="material-symbols-outlined text-3xl font-bold">menu_book</span>
                     <h2 class="text-slate-900 dark:text-slate-100 text-xl font-extrabold tracking-tight">
                         <a href="/" class="hover:text-primary transition-colors">KulturZine</a>
                     </h2>
                 </div>
                 <p class="text-slate-500 text-sm leading-relaxed">
                     Membangun ekosistem literasi independen yang inklusif dan progresif bagi para kreator zine.
                 </p>
                 <div class="flex gap-4">
                     <a class="w-8 h-8 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-500 hover:bg-primary hover:text-white transition-all"
                         href="#">
                         <span class="material-symbols-outlined text-lg">share</span>
                     </a>
                     <a class="w-8 h-8 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-500 hover:bg-primary hover:text-white transition-all"
                         href="#">
                         <span class="material-symbols-outlined text-lg">alternate_email</span>
                     </a>
                 </div>
             </div>
             <div>
                 <h5 class="font-bold mb-4">Navigasi</h5>
                 <ul class="space-y-2 text-sm text-slate-500">
                     <li><a class="hover:text-primary transition-colors" href="/">Beranda</a></li>
                     <li><a class="hover:text-primary transition-colors" href="/tentang-kami">Tentang Kami</a></li>
                     <li><a class="hover:text-primary transition-colors" href="/katalog-zine">Katalog Zine</a></li>
                     <li><a class="hover:text-primary transition-colors" href="/artikel">Artikel</a></li>
                     <li><a class="hover:text-primary transition-colors" href="/event">Acara</a></li>
                     <li><a class="hover:text-primary transition-colors" href="/galeri">Galeri</a></li>
                 </ul>
             </div>
             <div>
                 <h5 class="font-bold mb-4">Komunitas</h5>
                 <ul class="space-y-2 text-sm text-slate-500">
                     <li><a class="hover:text-primary transition-colors" href="#">Cara Mengirim Karya</a>
                     </li>
                     <li><a class="hover:text-primary transition-colors" href="#">Pedoman Komunitas</a></li>
                     <li><a class="hover:text-primary transition-colors" href="#">Relawan</a></li>
                     <li><a class="hover:text-primary transition-colors" href="#">Donasi</a></li>
                 </ul>
             </div>
             <div>
                 <h5 class="text-slate-900 dark:text-slate-100 font-bold mb-4 flex items-center gap-2">
                     <span class="material-symbols-outlined text-primary">location_on</span>
                     Lokasi Kami
                 </h5>

                 <div class="mb-4 text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                     <p class="font-bold text-slate-800 dark:text-slate-200">Gedung Kreatif KulturZine</p>
                     <p>Jl. Senopati No. 123, Kebayoran Baru,</p>
                     <p>Jakarta Selatan, DKI Jakarta 12190</p>
                     <p class="mt-2 flex items-center gap-2">
                         <span class="material-symbols-outlined text-xs">mail</span>
                         halo@kulturzine.id
                     </p>
                 </div>

                 <div class="overflow-hidden rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
                     <iframe class="w-full h-48 md:h-64 grayscale-[20%] hover:grayscale-0 transition-all duration-500"
                         src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2538114515284!2d106.80556207431264!3d-6.230230261011126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f145451e584d%3A0x35650742145c1103!2sSenopati!5e0!3m2!1sid!2sid!4v1710000000000!5m2!1sid!2sid"
                         style="border:0;" allowfullscreen="" loading="lazy"
                         referrerpolicy="no-referrer-when-downgrade">
                     </iframe>
                 </div>
             </div>
         </div>
         <div
             class="border-t border-slate-100 dark:border-slate-800 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
             <p class="text-slate-400 text-xs">© <span id="getYear"></span> ZinePlatform. Made with heart for
                 independent voices.</p>
             <div class="flex gap-6 text-xs text-slate-400">
                 <p class="text-slate-400 text-xs">Developed by - <a class="hover:text-primary transition-colors"
                         href="https://github.com/raphinha-amd" target="_blank">Rafinha-dev</a></p>
             </div>
         </div>
     </div>
 </footer>
 <script>
     // Script untuk update tahun di footer
     const yearSpan = document.getElementById('getYear');
     if (yearSpan) {
         yearSpan.textContent = new Date().getFullYear();
     }
 </script>
