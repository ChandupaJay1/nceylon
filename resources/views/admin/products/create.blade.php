@extends('layouts.master')
@section('navbar')@endsection
@section('footer')@endsection
@section('main_padding', 'pt-0')

@section('title', 'Admin - Add New Product')

@section('content')
<div class="min-h-screen bg-surface flex">
    @include('admin.layouts.sidebar')
    <div class="flex-1 lg:ml-64 pt-10 pb-16 px-6 lg:px-10">
        <div class="max-w-2xl">
        <!-- Header -->
        <div class="mb-10">
            <a href="{{ route('admin.products.index') }}" class="text-primary hover:text-primary-dark font-semibold mb-4 inline-flex items-center gap-2 text-sm">
                <i class="fas fa-arrow-left text-xs"></i> Back to Products
            </a>
            <h1 class="text-3xl font-heading font-black text-secondary">Add New Product</h1>
        </div>

        <!-- Form -->
        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-lg shadow-lg p-8 space-y-6">
            @csrf

            <!-- Product Name -->
            <div>
                <label for="name" class="block text-sm font-black text-secondary mb-2">Product Name *</label>
                <input type="text" id="name" name="name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-primary @error('name') border-red-500 @enderror" placeholder="e.g., Ceylon Cinnamon Sticks" value="{{ old('name') }}">
                @error('name') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Description -->
            <div>
                <label for="description" class="block text-sm font-black text-secondary mb-2">Description</label>
                <textarea id="description" name="description" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-primary @error('description') border-red-500 @enderror" placeholder="Product description...">{{ old('description') }}</textarea>
                @error('description') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Image Upload -->
            <div>
                <label for="image" class="block text-sm font-black text-secondary mb-2">Product Image</label>
                <div class="relative">
                    <input type="file" id="image" name="image" accept="image/*" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-primary @error('image') border-red-500 @enderror" onchange="previewImage(event)">
                    <p class="text-xs text-secondary/50 mt-1">Supported formats: JPEG, PNG, JPG, GIF, WebP (Max 5MB)</p>
                </div>
                
                <!-- Image Preview -->
                <div id="imagePreview" class="mt-4 hidden">
                    <p class="text-sm font-semibold text-secondary mb-2">Preview:</p>
                    <img id="previewImg" src="" alt="Preview" class="w-32 h-32 rounded-lg object-cover border border-gray-300">
                </div>
                @error('image') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Category & Unit Row -->
            <div class="grid grid-cols-2 gap-6">
                <!-- Category -->
                <div>
                    <label for="category" class="block text-sm font-black text-secondary mb-2">Category *</label>
                    <select id="category" name="category" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-primary @error('category') border-red-500 @enderror">
                        <option value="">Select Category</option>
                        @foreach($categories as $cat)
                        <option value="{{ $cat }}" @selected(old('category') === $cat)>{{ $cat }}</option>
                        @endforeach
                    </select>
                    @error('category') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <!-- Unit -->
                <div>
                    <label for="unit" class="block text-sm font-black text-secondary mb-2">Unit *</label>
                    <select id="unit" name="unit" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-primary @error('unit') border-red-500 @enderror">
                        <option value="">Select Unit</option>
                        @foreach($units as $u)
                        <option value="{{ $u }}" @selected(old('unit') === $u)>{{ $u }}</option>
                        @endforeach
                    </select>
                    @error('unit') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
                </div>
            </div>

            <!-- Price & Stock Status Row -->
            <div class="grid grid-cols-2 gap-6">
                <!-- Price -->
                <div>
                    <label for="price" class="block text-sm font-black text-secondary mb-2">Price (Optional)</label>
                    <input type="number" id="price" name="price" step="0.01" min="0" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-primary @error('price') border-red-500 @enderror" placeholder="0.00" value="{{ old('price') }}">
                    @error('price') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <!-- Stock Status -->
                <div>
                    <label for="stock_status" class="block text-sm font-black text-secondary mb-2">Stock Status *</label>
                    <select id="stock_status" name="stock_status" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-primary @error('stock_status') border-red-500 @enderror">
                        @foreach($stockStatuses as $status)
                        <option value="{{ $status->name }}" @selected(old('stock_status') === $status->name)>{{ $status->name }}</option>
                        @endforeach
                    </select>
                    @error('stock_status') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
                </div>
            </div>

            <!-- Sort Order -->
            <div>
                <label for="sort_order" class="block text-sm font-black text-secondary mb-2">Sort Order</label>
                <input type="number" id="sort_order" name="sort_order" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-primary @error('sort_order') border-red-500 @enderror" placeholder="0" value="{{ old('sort_order', 0) }}">
                <p class="text-xs text-secondary/50 mt-1">Lower numbers appear first</p>
                @error('sort_order') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Checkboxes Row -->
            <div class="grid grid-cols-2 gap-6 pt-4 border-t border-gray-200">
                <!-- Featured -->
                <label class="flex items-center gap-3 cursor-pointer">
                    <input type="checkbox" name="featured" value="1" class="w-5 h-5 rounded border-gray-300 text-primary focus:ring-primary" @checked(old('featured'))>
                    <span class="text-sm font-semibold text-secondary">Featured Product</span>
                </label>

                <!-- Active -->
                <label class="flex items-center gap-3 cursor-pointer">
                    <input type="checkbox" name="is_active" value="1" class="w-5 h-5 rounded border-gray-300 text-primary focus:ring-primary" @checked(old('is_active', true))>
                    <span class="text-sm font-semibold text-secondary">Active</span>
                </label>
            </div>

            <!-- Buttons -->
            <div class="flex gap-4 pt-8 border-t border-gray-200">
                <button type="submit" class="flex-1 bg-primary hover:bg-primary-dark text-white font-black py-4 rounded-lg transition-all">
                    <i class="fas fa-save mr-2"></i> Create Product
                </button>
                <a href="{{ route('admin.products.index') }}" class="flex-1 bg-gray-200 hover:bg-gray-300 text-secondary font-black py-4 rounded-lg transition-all text-center">
                    Cancel
                </a>
            </div>
        </form>
        </div>{{-- max-w-2xl --}}
    </div>{{-- flex-1 --}}
</div>{{-- flex --}}

<script>
function previewImage(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('previewImg').src = e.target.result;
            document.getElementById('imagePreview').classList.remove('hidden');
        };
        reader.readAsDataURL(file);
    }
}
</script>
@endsection
