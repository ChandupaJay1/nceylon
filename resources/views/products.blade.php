@extends('layouts.master')

@section('title', 'Spice Collection | N-CEYLON')
@section('meta_description', 'Browse N-CEYLON\'s premium Ceylon spice collection — cinnamon, black pepper, cardamom, cloves, nutmeg and more. Wholesale export quality from Sri Lanka.')

@section('content')
    <!-- Page Header -->
    <section class="relative py-24 lg:py-32 bg-secondary overflow-hidden bg-noise-overlay animate-slide-up">
        <div class="absolute inset-0 bg-[url('{{ asset('assets/spices/imag/spices.jpg') }}')] bg-fixed bg-cover opacity-10"></div>
        <div class="absolute top-0 right-0 w-full h-[2px] bg-gradient-to-r from-transparent via-accent to-transparent opacity-50"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-primary/5 rounded-full blur-3xl"></div>
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-accent/5 rounded-full blur-3xl"></div>
        <div class="container mx-auto px-4 relative z-10 text-center">
            <span class="inline-block py-1.5 px-5 bg-white/5 border border-white/10 backdrop-blur-md text-accent text-[10px] font-black uppercase tracking-[0.2em] rounded-full mb-6">Grade-1 Certified</span>
            <h1 class="text-4xl sm:text-5xl lg:text-7xl font-heading font-black text-white mb-6 leading-tight">Spice <span class="text-accent italic">Collection</span></h1>
            <nav class="flex justify-center space-x-2 text-white/60 text-xs font-bold uppercase tracking-wider">
                <a href="{{ url('/') }}" class="hover:text-accent transition-colors">Home</a>
                <span class="opacity-30">/</span>
                <span class="text-white">Shop Spices</span>
            </nav>
        </div>
    </section>

    <!-- Products Grid -->
    <section class="py-16 lg:py-24 bg-surface relative overflow-hidden bg-spice-pattern bg-noise-overlay">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-12 lg:gap-16">

                <!-- Sidebar -->
                <aside class="lg:w-1/4 space-y-8">
                    <!-- Search Widget -->
                    <form method="GET" action="{{ route('products') }}" class="bg-white p-8 rounded-[32px] shadow-premium border border-secondary/5 relative overflow-hidden group">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-primary/5 rounded-full -mr-16 -mt-16 group-hover:scale-110 transition-transform"></div>
                        <h4 class="text-base font-black text-secondary mb-6 uppercase tracking-widest">Search Spices</h4>
                        <div class="relative">
                            <input type="text" name="search" value="{{ $currentSearch }}"
                                   class="w-full bg-surface border-none rounded-2xl py-4 px-6 focus:ring-2 focus:ring-primary transition-all text-secondary font-semibold text-sm"
                                   placeholder="e.g. Cinnamon...">
                            <button type="submit" class="absolute right-4 top-1/2 -translate-y-1/2 text-primary hover:scale-110 transition-transform">
                                <i class="fas fa-search text-sm"></i>
                            </button>
                        </div>
                    </form>

                    <!-- Categories Widget -->
                    <div class="bg-white p-8 rounded-[32px] shadow-premium border border-secondary/5">
                        <h4 class="text-base font-black text-secondary mb-6 uppercase tracking-widest">Categories</h4>
                        <ul class="space-y-4">
                            <li>
                                <a href="{{ route('products') }}" class="flex justify-between items-center group {{ !$currentCategory ? 'font-black text-primary' : '' }}">
                                    <div class="flex items-center gap-3">
                                        <div class="w-2 h-2 rounded-full bg-primary/30 group-hover:bg-primary group-hover:scale-150 transition-all"></div>
                                        <span class="text-gray-500 group-hover:text-secondary group-hover:font-black transition-all text-sm font-semibold">All Spices</span>
                                    </div>
                                    <span class="bg-surface py-1 px-3 rounded-xl text-xs font-black text-gray-400 group-hover:bg-primary group-hover:text-white transition-all">{{ $products->total() }}</span>
                                </a>
                            </li>
                            @foreach($categories as $cat)
                            <li>
                                <a href="{{ route('products', ['category' => $cat]) }}" class="flex justify-between items-center group {{ $currentCategory === $cat ? 'font-black text-primary' : '' }}">
                                    <div class="flex items-center gap-3">
                                        <div class="w-2 h-2 rounded-full bg-primary/30 group-hover:bg-primary group-hover:scale-150 transition-all"></div>
                                        <span class="text-gray-500 group-hover:text-secondary group-hover:font-black transition-all text-sm font-semibold">{{ $cat }}</span>
                                    </div>
                                    <span class="bg-surface py-1 px-3 rounded-xl text-xs font-black text-gray-400 group-hover:bg-primary group-hover:text-white transition-all">{{ \App\Models\Product::active()->where('category', $cat)->count() }}</span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Quality Badge -->
                    <div class="bg-primary rounded-[32px] p-8 text-white relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-white/5 rounded-full -mr-16 -mt-16"></div>
                        <div class="w-12 h-12 bg-white/10 rounded-xl flex items-center justify-center text-accent text-xl mb-6">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <h4 class="text-base font-black mb-3">Grade-1 Certified</h4>
                        <p class="text-white/70 text-xs leading-relaxed font-semibold">Every batch is lab-tested for moisture, volatile oil content, and purity before export.</p>
                        <a href="{{ url('/quotations') }}" class="inline-flex items-center gap-2 mt-6 text-accent font-black text-xs uppercase tracking-widest hover:gap-4 transition-all">
                            <span>Get Wholesale Rates</span>
                            <i class="fas fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </aside>

                <!-- Product Listing -->
                <div class="lg:w-3/4">
                    <!-- Sort Bar -->
                    <form method="GET" action="{{ route('products') }}" class="flex flex-col md:flex-row justify-between items-center mb-10 bg-white p-6 rounded-[24px] shadow-premium border border-secondary/5 gap-4">
                        <p class="text-gray-400 font-semibold text-sm">
                            Showing <span class="text-secondary font-black">{{ $products->count() }}</span> of <span class="text-secondary font-black">{{ $products->total() }}</span> spices
                        </p>
                        <div class="flex items-center gap-4">
                            <span class="text-[10px] font-black text-gray-300 uppercase tracking-widest">Sort By</span>
                            <select name="sort_by" onchange="this.form.submit()" class="border-none bg-surface py-2.5 px-6 rounded-full font-black text-xs focus:ring-2 focus:ring-primary cursor-pointer transition-all text-secondary">
                                <option value="sort_order" @selected($currentSort === 'sort_order')>Featured</option>
                                <option value="name_asc" @selected($currentSort === 'name_asc')>Name: A–Z</option>
                                <option value="name_desc" @selected($currentSort === 'name_desc')>Name: Z–A</option>
                                <option value="featured" @selected($currentSort === 'featured')>Featured Only</option>
                                <option value="newest" @selected($currentSort === 'newest')>Newest</option>
                            </select>
                        </div>
                        @if($currentSearch || $currentCategory)
                        <a href="{{ route('products') }}" class="text-primary hover:text-primary-dark font-semibold text-sm">Clear Filters</a>
                        @endif
                    </form>

                    <!-- Grid -->
                    @if($products->count() > 0)
                    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-8">
                        @foreach ($products as $product)
                        <div class="bg-white rounded-[40px] overflow-hidden shadow-premium hover:-translate-y-3 transition-all duration-500 border border-secondary/5 group relative">
                            <!-- Image -->
                            <div class="aspect-square relative overflow-hidden bg-surface flex items-center justify-center p-8">
                                <img src="{{ $product->image_url }}"
                                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                                     alt="{{ $product->name }}">
                                <!-- Badge -->
                                <div class="absolute top-5 left-5">
                                    <span class="bg-primary text-white text-[9px] font-black uppercase tracking-[0.15em] px-3 py-1.5 rounded-full shadow-lg shadow-primary/20">{{ $product->category }}</span>
                                </div>
                                <!-- Stock Status -->
                                <div class="absolute top-5 right-5">
                                    <span class="text-[9px] font-black uppercase tracking-[0.15em] px-3 py-1.5 rounded-full shadow-lg
                                        @if($product->stock_status === 'In Stock') bg-green-100 text-green-700
                                        @elseif($product->stock_status === 'Out of Stock') bg-red-100 text-red-700
                                        @else bg-yellow-100 text-yellow-700
                                        @endif">
                                        {{ $product->stock_status }}
                                    </span>
                                </div>
                                <!-- Hover Actions -->
                                <div class="absolute inset-x-0 bottom-5 flex justify-center gap-3 opacity-0 group-hover:opacity-100 translate-y-6 group-hover:translate-y-0 transition-all duration-500">
                                    <a href="{{ url('/contact') }}" class="px-5 py-2.5 bg-white text-secondary rounded-full shadow-xl text-[10px] font-black uppercase tracking-widest hover:bg-primary hover:text-white transition-all">
                                        Request Quote
                                    </a>
                                </div>
                            </div>
                            <!-- Content -->
                            <div class="p-8 text-center">
                                <span class="text-[9px] font-black text-primary/50 uppercase tracking-widest block mb-2">{{ $product->unit }}</span>
                                <h3 class="text-lg font-heading font-black text-secondary mb-3 group-hover:text-primary transition-colors">{{ $product->name }}</h3>
                                <p class="text-gray-500 text-xs leading-relaxed mb-4 line-clamp-2">{{ $product->description }}</p>
                                @if($product->featured)
                                <div class="flex justify-center mb-3">
                                    <span class="text-accent text-sm"><i class="fas fa-star"></i> Featured</span>
                                </div>
                                @endif
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- Pagination -->
                    <div class="mt-16">
                        {{ $products->links() }}
                    </div>
                    @else
                    <div class="text-center py-16">
                        <i class="fas fa-inbox text-6xl text-gray-300 mb-4 block"></i>
                        <h3 class="text-2xl font-black text-secondary mb-2">No Products Found</h3>
                        <p class="text-gray-500 mb-6">Try adjusting your search or filter criteria</p>
                        <a href="{{ route('products') }}" class="inline-block bg-primary text-white font-black px-8 py-4 rounded-full hover:bg-primary-dark transition-all">
                            View All Products
                        </a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
