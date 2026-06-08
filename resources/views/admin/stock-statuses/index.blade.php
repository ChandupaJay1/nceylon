@extends('layouts.master')
@section('navbar')@endsection
@section('footer')@endsection
@section('main_padding')pt-0@endsection
@section('title', 'Admin — Stock Statuses')
@section('content')
<div class="min-h-screen bg-surface flex">
    @include('admin.layouts.sidebar')
    <div class="flex-1 lg:ml-64 pt-10 pb-16 px-6 lg:px-10">

        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-10">
            <div>
                <h1 class="text-3xl font-heading font-black text-secondary">Stock Statuses</h1>
                <p class="text-secondary/50 text-sm mt-1">Manage product stock status labels</p>
            </div>
            <a href="{{ route('admin.stock-statuses.create') }}"
               class="inline-flex items-center gap-2 bg-primary hover:bg-primary-dark text-white font-black px-6 py-3 rounded-full transition-all text-sm">
                <i class="fas fa-plus text-xs"></i> Add Status
            </a>
        </div>

        @if(session('success'))
        <div class="flex items-center gap-3 bg-green-50 border border-green-200 text-green-700 px-5 py-4 rounded-2xl mb-8 text-sm font-semibold">
            <i class="fas fa-check-circle"></i> {{ session('success') }}
        </div>
        @endif

        <div class="bg-white rounded-2xl shadow-premium border border-secondary/5 overflow-hidden">
            <table class="w-full">
                <thead class="bg-secondary text-white">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-black uppercase tracking-widest">#</th>
                        <th class="px-6 py-4 text-left text-xs font-black uppercase tracking-widest">Name</th>
                        <th class="px-6 py-4 text-left text-xs font-black uppercase tracking-widest">Badge Preview</th>
                        <th class="px-6 py-4 text-left text-xs font-black uppercase tracking-widest">Sort</th>
                        <th class="px-6 py-4 text-left text-xs font-black uppercase tracking-widest">Status</th>
                        <th class="px-6 py-4 text-left text-xs font-black uppercase tracking-widest">Products</th>
                        <th class="px-6 py-4 text-center text-xs font-black uppercase tracking-widest">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($stockStatuses as $status)
                    <tr class="hover:bg-surface transition-colors">
                        <td class="px-6 py-4 text-sm text-secondary/40 font-semibold">{{ $status->id }}</td>
                        <td class="px-6 py-4 font-black text-secondary">{{ $status->name }}</td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-black {{ $status->badge_class }}">
                                {{ $status->name }}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-sm text-secondary/60">{{ $status->sort_order }}</td>
                        <td class="px-6 py-4">
                            @if($status->is_active)
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-black">
                                <span class="w-1.5 h-1.5 bg-green-500 rounded-full"></span> Active
                            </span>
                            @else
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-gray-100 text-gray-500 rounded-full text-xs font-black">
                                <span class="w-1.5 h-1.5 bg-gray-400 rounded-full"></span> Inactive
                            </span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-sm text-secondary/60 font-semibold">
                            {{ \App\Models\Product::where('stock_status', $status->name)->count() }}
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center justify-center gap-3">
                                <a href="{{ route('admin.stock-statuses.edit', $status) }}"
                                   class="w-8 h-8 flex items-center justify-center rounded-lg bg-primary/10 text-primary hover:bg-primary hover:text-white transition-all text-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.stock-statuses.destroy', $status) }}" method="POST"
                                      onsubmit="return confirm('Delete \'{{ $status->name }}\'?')">
                                    @csrf @method('DELETE')
                                    <button type="submit"
                                            class="w-8 h-8 flex items-center justify-center rounded-lg bg-red-50 text-red-500 hover:bg-red-500 hover:text-white transition-all text-sm">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="px-6 py-16 text-center text-secondary/40">
                            <i class="fas fa-circle-dot text-4xl mb-3 block opacity-20"></i>
                            No stock statuses yet. <a href="{{ route('admin.stock-statuses.create') }}" class="text-primary font-semibold">Add one now</a>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="mt-6">{{ $stockStatuses->links() }}</div>
    </div>
</div>
@endsection
