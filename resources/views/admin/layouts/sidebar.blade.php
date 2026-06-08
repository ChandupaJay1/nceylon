{{-- Admin Sidebar Nav — include inside admin pages --}}
<aside class="w-64 bg-secondary min-h-screen flex-shrink-0 hidden lg:flex flex-col fixed top-0 left-0 z-40 shadow-2xl">
    {{-- Logo --}}
    <div class="p-6 border-b border-white/10">
        <a href="{{ url('/') }}" class="flex items-center gap-3 group">
            <img src="{{ asset('assets/icon/nceylontp.png') }}" class="h-10 w-auto group-hover:scale-105 transition-transform" alt="N-CEYLON">
            <div>
                <p class="text-white font-black text-sm leading-none">N-CEYLON</p>
                <p class="text-white/40 text-[10px] uppercase tracking-widest">Admin Panel</p>
            </div>
        </a>
    </div>


</aside>
