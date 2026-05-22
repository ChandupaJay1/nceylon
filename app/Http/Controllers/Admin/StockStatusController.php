<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StockStatus;
use Illuminate\Http\Request;

class StockStatusController extends Controller
{
    public function index()
    {
        $stockStatuses = StockStatus::orderBy('sort_order')->orderBy('name')->paginate(20);
        return view('admin.stock-statuses.index', compact('stockStatuses'));
    }

    public function create()
    {
        return view('admin.stock-statuses.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'       => 'required|string|max:100|unique:stock_statuses,name',
            'color'      => 'required|in:green,red,yellow,blue,gray',
            'sort_order' => 'nullable|integer|min:0',
            'is_active'  => 'boolean',
        ]);

        StockStatus::create([
            'name'       => $validated['name'],
            'color'      => $validated['color'],
            'sort_order' => $validated['sort_order'] ?? 0,
            'is_active'  => $request->has('is_active'),
        ]);

        return redirect()->route('admin.stock-statuses.index')->with('success', 'Stock status created successfully!');
    }

    public function edit(StockStatus $stockStatus)
    {
        return view('admin.stock-statuses.edit', compact('stockStatus'));
    }

    public function update(Request $request, StockStatus $stockStatus)
    {
        $validated = $request->validate([
            'name'       => 'required|string|max:100|unique:stock_statuses,name,' . $stockStatus->id,
            'color'      => 'required|in:green,red,yellow,blue,gray',
            'sort_order' => 'nullable|integer|min:0',
            'is_active'  => 'boolean',
        ]);

        $stockStatus->update([
            'name'       => $validated['name'],
            'color'      => $validated['color'],
            'sort_order' => $validated['sort_order'] ?? 0,
            'is_active'  => $request->has('is_active'),
        ]);

        return redirect()->route('admin.stock-statuses.index')->with('success', 'Stock status updated successfully!');
    }

    public function destroy(StockStatus $stockStatus)
    {
        $stockStatus->delete();
        return redirect()->route('admin.stock-statuses.index')->with('success', 'Stock status deleted successfully!');
    }
}
