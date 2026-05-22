@extends('layouts.master')
@section('title', 'Admin — Edit Stock Status')
@section('content')
<div class="min-h-screen bg-surface flex">
    @include('admin.layouts.sidebar')
    <div class="flex-1 lg:ml-64 pt-24 pb-16 px-6 lg:px-10">
        <div class="max-w-lg">
            <a href="{{ route('admin.stock-statuses.index') }}" class="inline-flex items-center gap-2 text-primary hover:text-primary-dark font-semibold text-sm mb-6">
                <i class="fas fa-arrow-left text-xs"></i> Back to Stock Statuses
            </a>
            <h1 class="text-3xl font-heading font-black text-secondary mb-8">Edit Stock Status</h1>

            <form action="{{ route('admin.stock-statuses.update', $stockStatus) }}" method="POST"
                  class="bg-white rounded-2xl shadow-premium border border-secondary/5 p-8 space-y-6">
                @csrf @method('PUT')

                <div>
                    <label class="block text-xs font-black uppercase tracking-widest text-secondary/60 mb-2">Status Name *</label>
                    <input type="text" name="name" value="{{ old('name', $stockStatus->name) }}" required
                           class="w-full px-4 py-3 border @error('name') border-red-400 @else border-gray-200 @enderror rounded-xl focus:outline-none focus:border-primary text-sm font-semibold transition-colors">
                    @error('name') <p class="text-red-500 text-xs mt-1.5 font-semibold">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-xs font-black uppercase tracking-widest text-secondary/60 mb-2">Badge Color *</label>
                    <div class="grid grid-cols-5 gap-3">
                        @foreach(['green' => 'bg-green-100 text-green-700', 'red' => 'bg-red-100 text-red-700', 'yellow' => 'bg-yellow-100 text-yellow-700', 'blue' => 'bg-blue-100 text-blue-700', 'gray' => 'bg-gray-100 text-gray-700'] as $color => $cls)
                        <label class="cursor-pointer">
                            <input type="radio" name="color" value="{{ $color }}" class="sr-only peer" @checked(old('color', $stockStatus->color) === $color)>
                            <div class="peer-checked:ring-2 peer-checked:ring-primary peer-checked:ring-offset-2 rounded-xl p-3 text-center transition-all {{ $cls }} font-black text-xs capitalize">
                                {{ $color }}
                            </div>
                        </label>
                        @endforeach
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-black uppercase tracking-widest text-secondary/60 mb-2">Sort Order</label>
                    <input type="number" name="sort_order" value="{{ old('sort_order', $stockStatus->sort_order) }}" min="0"
                           class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:border-primary text-sm font-semibold transition-colors">
                </div>

                <label class="flex items-center gap-3 cursor-pointer pt-2">
                    <input type="checkbox" name="is_active" value="1" class="w-4 h-4 rounded border-gray-300 text-primary focus:ring-primary" @checked(old('is_active', $stockStatus->is_active))>
                    <span class="text-sm font-semibold text-secondary">Active</span>
                </label>

                <div class="flex gap-3 pt-4 border-t border-gray-100">
                    <button type="submit" class="flex-1 bg-primary hover:bg-primary-dark text-white font-black py-3.5 rounded-xl transition-all text-sm">
                        <i class="fas fa-save mr-2"></i> Update Status
                    </button>
                    <a href="{{ route('admin.stock-statuses.index') }}" class="flex-1 bg-gray-100 hover:bg-gray-200 text-secondary font-black py-3.5 rounded-xl transition-all text-sm text-center">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
