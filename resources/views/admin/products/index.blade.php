@extends('layouts.master')

@section('title', 'Admin - Products Management')

@section('content')
<div class="min-h-screen bg-surface pt-32 pb-20">
    <div class="container mx-auto px-4">
        <!-- Header -->
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6 mb-12">
            <div>
                <h1 class="text-4xl font-heading font-black text-secondary mb-2">Products Management</h1>
                <p class="text-secondary/60 text-sm">Manage all your spice products</p>
            </div>
            <a href="{{ route('admin.products.create') }}" class="bg-primary hover:bg-primary-dark text-white font-black px-8 py-4 rounded-full transition-all">
                <i class="fas fa-plus mr-2"></i> Add New Product
            </a>
        </div>

        <!-- Success Message -->
        @if(session('success'))
        <div class="bg-green-50 border border-green-200 text-green-700 px-6 py-4 rounded-lg mb-8">
            {{ session('success') }}
        </div>
        @endif

        <!-- Products Table -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <table class="w-full">
                <thead class="bg-secondary text-white">
                    <tr>
                        <th class="px-6 py-4 text-left text-sm font-black">Product Name</th>
                        <th class="px-6 py-4 text-left text-sm font-black">Category</th>
                        <th class="px-6 py-4 text-left text-sm font-black">Unit</th>
                        <th class="px-6 py-4 text-left text-sm font-black">Stock Status</th>
                        <th class="px-6 py-4 text-left text-sm font-black">Featured</th>
                        <th class="px-6 py-4 text-left text-sm font-black">Active</th>
                        <th class="px-6 py-4 text-center text-sm font-black">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse($products as $product)
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                @if($product->image_path)
                                <img src="{{ asset($product->image_path) }}" alt="{{ $product->name }}" class="w-10 h-10 rounded object-cover">
                                @endif
                                <div>
                                    <p class="font-semibold text-secondary">{{ $product->name }}</p>
                                    <p class="text-xs text-secondary/50">{{ $product->slug }}</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-sm text-secondary/70">{{ $product->category }}</td>
                        <td class="px-6 py-4 text-sm text-secondary/70">{{ $product->unit }}</td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-black
                                @if($product->stock_status === 'In Stock') bg-green-100 text-green-700
                                @elseif($product->stock_status === 'Out of Stock') bg-red-100 text-red-700
                                @else bg-yellow-100 text-yellow-700
                                @endif">
                                {{ $product->stock_status }}
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            @if($product->featured)
                            <span class="inline-flex items-center gap-1 text-accent font-black text-sm">
                                <i class="fas fa-star"></i> Yes
                            </span>
                            @else
                            <span class="text-secondary/40 text-sm">No</span>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            @if($product->is_active)
                            <span class="inline-flex items-center gap-1 text-green-600 font-black text-sm">
                                <i class="fas fa-check-circle"></i> Active
                            </span>
                            @else
                            <span class="text-secondary/40 text-sm">Inactive</span>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ route('admin.products.edit', $product) }}" class="text-primary hover:text-primary-dark transition-colors" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.products.destroy', $product) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-800 transition-colors" title="Delete">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="px-6 py-12 text-center text-secondary/50">
                            <i class="fas fa-inbox text-4xl mb-4 block opacity-30"></i>
                            No products found. <a href="{{ route('admin.products.create') }}" class="text-primary font-semibold">Create one now</a>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="mt-8">
            {{ $products->links() }}
        </div>
    </div>
</div>
@endsection
