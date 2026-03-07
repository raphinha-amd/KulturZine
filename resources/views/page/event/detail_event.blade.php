@extends('layout.app')
@section('content')
    <!-- Hero Banner Section -->
<div class="relative w-full aspect-[21/9] rounded-xl overflow-hidden mb-8 shadow-sm">
<img alt="Zine Workshop" class="w-full h-full object-cover" data-alt="Group of people making creative art zines together" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAmeqalMaLV_TUrKl8IIViGYqb7SJaEiZIzdZUXF82NaXFWzNzREpmLlLs-lBAH-SkUW36vcgdmTrYBym8gGmbhD9rNiulWyjZSWKEhjS2mMHvldtApsOdo1Ouru1wVajzg-oBCSdRSp1Hk1qhK45CKUzldOdEiSSste87E_866F2tcUZedeJn7TCUR0SoShLk_q1mZuDiW4_MVZI2PNetbiRatJ7NXFyeu76PsnGX3FaMENnJwL4CYEbG2QdxvfmHEyluprINqCEla"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex flex-col justify-end p-8">
<span class="bg-primary text-white px-3 py-1 rounded-full text-xs font-bold w-fit mb-3 tracking-wider uppercase">Workshop</span>
<h1 class="text-white text-3xl md:text-5xl font-extrabold tracking-tight">Summer Zine-Making Intensive 2024</h1>
<p class="text-slate-200 mt-2 text-lg">A full weekend of analog publishing, storytelling, and self-expression.</p>
</div>
</div>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
<!-- Main Content Area -->
<div class="lg:col-span-2 space-y-10">
<!-- Event Description -->
<section>
<h2 class="text-2xl font-bold mb-4 text-slate-900 dark:text-white">About the Event</h2>
<div class="text-slate-700 dark:text-slate-300 space-y-4 leading-relaxed">
<p>Whether you're a seasoned self-publisher or picking up a pair of scissors for the first time, our Summer Intensive is designed to help you bring your stories to life. Over two days, we'll dive deep into the history of independent publishing, various folding techniques, and collaborative storytelling.</p>
<p>You'll have access to our full library of vintage magazines, typewriters, risograph printers, and a variety of paper stocks. By the end of the workshop, every participant will have produced their own 8-page zine and contributed a page to our collective community anthology.</p>
</div>
</section>
<!-- Schedule/Agenda -->
<section>
<h2 class="text-2xl font-bold mb-6 text-slate-900 dark:text-white">Event Schedule</h2>
<div class="space-y-4">
<div class="flex gap-4 p-4 rounded-xl bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800">
<div class="text-primary font-bold min-w-[80px]">10:00 AM</div>
<div>
<h4 class="font-bold text-slate-900 dark:text-white">Welcome &amp; Introduction</h4>
<p class="text-sm text-slate-500">History of zines and collective icebreaker.</p>
</div>
</div>
<div class="flex gap-4 p-4 rounded-xl bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800">
<div class="text-primary font-bold min-w-[80px]">11:30 AM</div>
<div>
<h4 class="font-bold text-slate-900 dark:text-white">Layout &amp; Folding Workshop</h4>
<p class="text-sm text-slate-500">Mastering the 8-page fold and creative imposition.</p>
</div>
</div>
<div class="flex gap-4 p-4 rounded-xl bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800">
<div class="text-primary font-bold min-w-[80px]">01:00 PM</div>
<div>
<h4 class="font-bold text-slate-900 dark:text-white">Community Lunch Break</h4>
<p class="text-sm text-slate-500">Vegan-friendly catering provided in the courtyard.</p>
</div>
</div>
<div class="flex gap-4 p-4 rounded-xl bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800">
<div class="text-primary font-bold min-w-[80px]">02:30 PM</div>
<div>
<h4 class="font-bold text-slate-900 dark:text-white">Production Time</h4>
<p class="text-sm text-slate-500">Independent work with mentor guidance available.</p>
</div>
</div>
</div>
</section>
<!-- Organizers -->
<section>
<h2 class="text-2xl font-bold mb-6 text-slate-900 dark:text-white">Meet the Organizers</h2>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="flex items-center gap-4">
<div class="size-16 rounded-full overflow-hidden flex-shrink-0">
<img alt="Sarah Chen" class="w-full h-full object-cover" data-alt="Portrait of Sarah Chen, event organizer" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAuKCoX4zPBEP-WDQrLVW-wqSyAqQ1sEtqqeWIhZLHVZ8MBVQjaX72YxHj0SK7zHprPyiwAB5Dul4-5EdwWax7bUB1zwhYE5gykP4ZMQXwb9DpYGuwHDcGlsm_tSsd2gtaKgyQlO7UAkJgrCn_jrmFRA-c2zRJ1SAlvObr8YIzDIv2e2IO4MAlobBd5rcf_ndazJZnR9HXPgHxD9j1Wv5cAGNmUzy4CNPqFR2Zjr1xrnKC0aTGzpXQb61w4VcyIL7q8wdxBj5bOjUmf"/>
</div>
<div>
<h4 class="font-bold text-slate-900 dark:text-white">Sarah Chen</h4>
<p class="text-sm text-slate-500">Lead Artist &amp; Facilitator</p>
</div>
</div>
<div class="flex items-center gap-4">
<div class="size-16 rounded-full overflow-hidden flex-shrink-0">
<img alt="Marcus Rivera" class="w-full h-full object-cover" data-alt="Portrait of Marcus Rivera, local publisher" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBpXnUtP4Ev8fjqTF4ACdu0JGH08FRN_V-hwagHp_I09n45VF_LdIcrIBZaCnrHQflOlTVKQHniK2PB2r_OCkg5ZhdF4q07JmmzLyOiB0nRUGvJHS7FWn5QJ3RwOpOl4wreI_aEkag34uJmaBvvEnpAO52Rq_izZfwKnV-ReqKz7YJ-8SeSyvPOIjlkvTEuu18Tk3_qYCz_2XWVRNZc0xw24TRBJVhOXQZnkSWoLiPWQFD7wLQ6Bb9-6RhqBugE7CC1OxZRCuFv8tax"/>
</div>
<div>
<h4 class="font-bold text-slate-900 dark:text-white">Marcus Rivera</h4>
<p class="text-sm text-slate-500">Founder of Small Press NYC</p>
</div>
</div>
</div>
</section>
</div>
<!-- Sidebar Information -->
<div class="lg:col-span-1 space-y-6">
<div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-100 dark:border-slate-800 sticky top-24 shadow-sm">
<div class="mb-6">
<p class="text-slate-500 text-sm font-semibold uppercase tracking-wider mb-1">Registration</p>
<h3 class="text-3xl font-bold text-primary">Free</h3>
<p class="text-sm text-slate-500 mt-1">Limited to 30 participants</p>
</div>
<div class="space-y-4 mb-8">
<div class="flex items-start gap-3">
<span class="material-symbols-outlined text-primary">calendar_today</span>
<div>
<p class="font-bold text-slate-900 dark:text-white">October 12-13, 2024</p>
<p class="text-sm text-slate-500">Saturday &amp; Sunday</p>
</div>
</div>
<div class="flex items-start gap-3">
<span class="material-symbols-outlined text-primary">schedule</span>
<div>
<p class="font-bold text-slate-900 dark:text-white">10:00 AM - 4:00 PM</p>
<p class="text-sm text-slate-500">Full weekend workshop</p>
</div>
</div>
<div class="flex items-start gap-3">
<span class="material-symbols-outlined text-primary">location_on</span>
<div>
<p class="font-bold text-slate-900 dark:text-white">Community Arts Center</p>
<p class="text-sm text-slate-500">452 Creative Way, Portland, OR</p>
</div>
</div>
</div>
<!-- Map Placeholder -->
<div class="w-full h-40 bg-slate-100 dark:bg-slate-800 rounded-lg mb-8 overflow-hidden relative group">
<div class="absolute inset-0 bg-slate-200 dark:bg-slate-700 animate-pulse group-hover:bg-slate-300 transition-colors" data-location="Portland, Oregon" style=""></div>
<div class="absolute inset-0 flex flex-col items-center justify-center text-slate-400">
<span class="material-symbols-outlined text-4xl">map</span>
<span class="text-xs mt-2 font-medium">Click to view on map</span>
</div>
</div>
<div class="space-y-3">
<button class="w-full py-4 bg-primary text-white font-bold rounded-xl hover:bg-primary/90 transition-all shadow-md active:scale-95">
                                Register Now
                            </button>
<button class="w-full py-4 bg-primary/10 text-primary font-bold rounded-xl hover:bg-primary/20 transition-all active:scale-95">
                                Volunteer for this Event
                            </button>
</div>
<div class="mt-6 pt-6 border-t border-slate-100 dark:border-slate-800 flex justify-center gap-6">
<button class="text-slate-400 hover:text-primary"><span class="material-symbols-outlined">share</span></button>
<button class="text-slate-400 hover:text-primary"><span class="material-symbols-outlined">bookmark</span></button>
<button class="text-slate-400 hover:text-primary"><span class="material-symbols-outlined">mail</span></button>
</div>
</div>
</div>
</div>
@endsection