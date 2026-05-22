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

    {{-- Nav --}}
    <nav class="flex-1 p-4 space-y-1 overflow-y-auto">
        {{-- Products --}}
        <p class="text-white/25 text-[9px] font-black uppercase tracking-widest px-3 pt-4 pb-2">Products</p>
        <a href="{{ route('admin.products.index') }}"
           class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-semibold transition-all
                  {{ Request::is('admin/products*') ? 'bg-primary text-white' : 'text-white/60 hover:bg-white/8 hover:text-white' }}">
            <i class="fas fa-box-open w-4 text-center"></i> Products
        </a>

        {{-- Settings --}}
        <p class="text-white/25 text-[9px] font-black uppercase tracking-widest px-3 pt-4 pb-2">Settings</p>
        <a href="{{ route('admin.categories.index') }}"
           class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-semibold transition-all
                  {{ Request::is('admin/categories*') ? 'bg-primary text-white' : 'text-white/60 hover:bg-white/8 hover:text-white' }}">
            <i class="fas fa-tags w-4 text-center"></i> Categories
        </a>
        <a href="{{ route('admin.units.index') }}"
           class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-semibold transition-all
                  {{ Request::is('admin/units*') ? 'bg-primary text-white' : 'text-white/60 hover:bg-white/8 hover:text-white' }}">
            <i class="fas fa-weight-hanging w-4 text-center"></i> Units
        </a>
        <a href="{{ route('admin.stock-statuses.index') }}"
           class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-semibold transition-all
                  {{ Request::is('admin/stock-statuses*') ? 'bg-primary text-white' : 'text-white/60 hover:bg-white/8 hover:text-white' }}">
            <i class="fas fa-circle-dot w-4 text-center"></i> Stock Statuses
        </a>
    </nav>

    {{-- Footer --}}
    <div class="p-4 border-t border-white/10">
        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button type="submit" class="w-full flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-semibold text-white/50 hover:bg-red-500/20 hover:text-red-400 transition-all">
                <i class="fas fa-sign-out-alt w-4 text-center"></i> Logout
            </button>
        </form>
        <a href="{{ url('/') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-semibold text-white/50 hover:bg-white/8 hover:text-white transition-all mt-1">
            <i class="fas fa-globe w-4 text-center"></i> View Website
        </a>
    </div>
</aside>
