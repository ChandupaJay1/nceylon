@extends('layouts.master')
@section('navbar')@endsection
@section('footer')@endsection
@section('main_padding', 'pt-0')
@section('title', 'Admin — Add Unit')
@section('content')
<div class="min-h-screen bg-surface flex">
    @include('admin.layouts.sidebar')
    <div class="flex-1 lg:ml-64 pt-10 pb-16 px-6 lg:px-10">
        <div class="max-w-lg">
            <a href="{{ route('admin.units.index') }}" class="inline-flex items-center gap-2 text-primary hover:text-primary-dark font-semibold text-sm mb-6">
                <i class="fas fa-arrow-left text-xs"></i> Back to Units
            </a>
            <h1 class="text-3xl font-heading font-black text-secondary mb-8">Add Unit</h1>

            <form action="{{ route('admin.units.store') }}" method="POST"
                  class="bg-white rounded-2xl shadow-premium border border-secondary/5 p-8 space-y-6">
                @csrf

                <div>
                    <label class="block text-xs font-black uppercase tracking-widest text-secondary/60 mb-2">Unit Name *</label>
                    <input type="text" name="name" value="{{ old('name') }}" required
                           class="w-full px-4 py-3 border @error('name') border-red-400 @else border-gray-200 @enderror rounded-xl focus:outline-none focus:border-primary text-sm font-semibold transition-colors"
                           placeholder="e.g. Kg">
                    @error('name') <p class="text-red-500 text-xs mt-1.5 font-semibold">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-xs font-black uppercase tracking-widest text-secondary/60 mb-2">Sort Order</label>
                    <input type="number" name="sort_order" value="{{ old('sort_order', 0) }}" min="0"
                           class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:border-primary text-sm font-semibold transition-colors">
                </div>

                <label class="flex items-center gap-3 cursor-pointer pt-2">
                    <input type="checkbox" name="is_active" value="1" class="w-4 h-4 rounded border-gray-300 text-primary focus:ring-primary" @checked(old('is_active', true))>
                    <span class="text-sm font-semibold text-secondary">Active</span>
                </label>

                <div class="flex gap-3 pt-4 border-t border-gray-100">
                    <button type="submit" class="flex-1 bg-primary hover:bg-primary-dark text-white font-black py-3.5 rounded-xl transition-all text-sm">
                        <i class="fas fa-save mr-2"></i> Create Unit
                    </button>
                    <a href="{{ route('admin.units.index') }}" class="flex-1 bg-gray-100 hover:bg-gray-200 text-secondary font-black py-3.5 rounded-xl transition-all text-sm text-center">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
