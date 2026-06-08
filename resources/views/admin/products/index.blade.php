@extends('layouts.master')
@section('navbar')@endsection
@section('footer')@endsection
@section('main_padding')pt-0@endsection
@section('title', 'Admin — Products')
@section('content')
<div class="min-h-screen bg-surface flex">
    @include('admin.layouts.sidebar')
    <div class="flex-1 lg:ml-64 pt-10 pb-16 px-6 lg:px-10">

        {{-- Header --}}
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-10">
            <div>
                <h1 class="text-3xl font-heading font-black text-secondary">Products</h1>
                <p class="text-secondary/50 text-sm mt-1">Manage your spice product catalogue</p>
            </div>
            <a href="{{ route('admin.products.create') }}"
               class="inline-flex items-center gap-2 bg-primary hover:bg-primary-dark text-white font-black px-6 py-3 rounded-full transition-all text-sm">
                <i class="fas fa-plus text-xs"></i> Add Product
            </a>
        </div>

        {{-- Flash --}}
        @if(session('success'))
        <div class="flex items-center gap-3 bg-green-50 border border-green-200 text-green-700 px-5 py-4 rounded-2xl mb-8 text-sm font-semibold">
            <i class="fas fa-check-circle"></i> {{ session('success') }}
        </div>
        @endif

        {{-- Table --}}
        <div class="bg-white rounded-2xl shadow-premium border border-secondary/5 overflow-hidden">
            <table class="w-full">
                <thead class="bg-secondary text-white">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-black uppercase tracking-widest">Product</th>
                        <th class="px-6 py-4 text-left text-xs font-black uppercase tracking-widest">Category</th>
                        <th class="px-6 py-4 text-left text-xs font-black uppercase tracking-widest">Unit</th>
                        <th class="px-6 py-4 text-left text-xs font-black uppercase tracking-widest">Stock</th>
                        <th class="px-6 py-4 text-left text-xs font-black uppercase tracking-widest">Featured</th>
                        <th class="px-6 py-4 text-left text-xs font-black uppercase tracking-widest">Active</th>
                        <th class="px-6 py-4 text-center text-xs font-black uppercase tracking-widest">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($products as $product)
                    <tr class="hover:bg-surface transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <img src="{{ $product->image_url }}"
                                     alt="{{ $product->name }}"
                                     class="w-11 h-11 rounded-xl object-cover border border-secondary/10 flex-shrink-0">
                                <div>
                                    <p class="font-black text-secondary text-sm">{{ $product->name }}</p>
                                    <p class="text-xs text-secondary/40 font-semibold">{{ $product->slug }}</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-sm text-secondary/70 font-semibold">{{ $product->category }}</td>
                        <td class="px-6 py-4 text-sm text-secondary/70 font-semibold">{{ $product->unit }}</td>
                        <td class="px-6 py-4">
                            @php
                                $statusColor = \App\Models\StockStatus::where('name', $product->stock_status)->value('color') ?? 'gray';
                                $badgeClass = match($statusColor) {
                                    'green'  => 'bg-green-100 text-green-700',
                                    'red'    => 'bg-red-100 text-red-700',
                                    'yellow' => 'bg-yellow-100 text-yellow-700',
                                    'blue'   => 'bg-blue-100 text-blue-700',
                                    default  => 'bg-gray-100 text-gray-700',
                                };
                            @endphp
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-black {{ $badgeClass }}">
                                {{ $product->stock_status }}
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            @if($product->featured)
                            <span class="inline-flex items-center gap-1 text-accent font-black text-sm">
                                <i class="fas fa-star text-xs"></i> Yes
                            </span>
                            @else
                            <span class="text-secondary/30 text-sm font-semibold">—</span>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            @if($product->is_active)
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-black">
                                <span class="w-1.5 h-1.5 bg-green-500 rounded-full"></span> Active
                            </span>
                            @else
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-gray-100 text-gray-500 rounded-full text-xs font-black">
                                <span class="w-1.5 h-1.5 bg-gray-400 rounded-full"></span> Inactive
                            </span>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center justify-center gap-3">
                                <a href="{{ route('admin.products.edit', $product) }}"
                                   class="w-8 h-8 flex items-center justify-center rounded-lg bg-primary/10 text-primary hover:bg-primary hover:text-white transition-all text-sm" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.products.destroy', $product) }}" method="POST"
                                      onsubmit="return confirm('Delete \'{{ $product->name }}\'? This cannot be undone.')">
                                    @csrf @method('DELETE')
                                    <button type="submit"
                                            class="w-8 h-8 flex items-center justify-center rounded-lg bg-red-50 text-red-500 hover:bg-red-500 hover:text-white transition-all text-sm" title="Delete">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="px-6 py-16 text-center text-secondary/40">
                            <i class="fas fa-box-open text-4xl mb-3 block opacity-20"></i>
                            No products yet. <a href="{{ route('admin.products.create') }}" class="text-primary font-semibold">Add one now</a>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-6">{{ $products->links() }}</div>
    </div>
</div>
@endsection
