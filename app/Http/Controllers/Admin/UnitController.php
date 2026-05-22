<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index()
    {
        $units = Unit::orderBy('sort_order')->orderBy('name')->paginate(20);
        return view('admin.units.index', compact('units'));
    }

    public function create()
    {
        return view('admin.units.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'       => 'required|string|max:50|unique:units,name',
            'sort_order' => 'nullable|integer|min:0',
            'is_active'  => 'boolean',
        ]);

        Unit::create([
            'name'       => $validated['name'],
            'sort_order' => $validated['sort_order'] ?? 0,
            'is_active'  => $request->has('is_active'),
        ]);

        return redirect()->route('admin.units.index')->with('success', 'Unit created successfully!');
    }

    public function edit(Unit $unit)
    {
        return view('admin.units.edit', compact('unit'));
    }

    public function update(Request $request, Unit $unit)
    {
        $validated = $request->validate([
            'name'       => 'required|string|max:50|unique:units,name,' . $unit->id,
            'sort_order' => 'nullable|integer|min:0',
            'is_active'  => 'boolean',
        ]);

        $unit->update([
            'name'       => $validated['name'],
            'sort_order' => $validated['sort_order'] ?? 0,
            'is_active'  => $request->has('is_active'),
        ]);

        return redirect()->route('admin.units.index')->with('success', 'Unit updated successfully!');
    }

    public function destroy(Unit $unit)
    {
        $unit->delete();
        return redirect()->route('admin.units.index')->with('success', 'Unit deleted successfully!');
    }
}
