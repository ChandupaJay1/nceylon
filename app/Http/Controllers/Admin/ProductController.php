<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use App\Services\ImageUploadService;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    protected $imageUploadService;

    public function __construct(ImageUploadService $imageUploadService)
    {
        $this->imageUploadService = $imageUploadService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::orderBy('sort_order')->paginate(15);
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = ['Whole Spices', 'Ground Spices', 'Spice Blends', 'Specialty Items'];
        $units = ['Kg', 'g', 'lb', 'oz'];
        return view('admin.products.create', compact('categories', 'units'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $validated = $request->validated();

        // Create product first to get ID for image naming
        $product = Product::create([
            'name' => $validated['name'],
            'slug' => Str::slug($validated['name']),
            'description' => $validated['description'] ?? null,
            'category' => $validated['category'],
            'unit' => $validated['unit'],
            'price' => $validated['price'] ?? null,
            'stock_status' => $validated['stock_status'],
            'featured' => $request->has('featured'),
            'sort_order' => $validated['sort_order'] ?? 0,
            'is_active' => $request->has('is_active'),
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $this->imageUploadService->upload($request->file('image'), $product->id);
            if ($imagePath) {
                $product->update(['image_path' => $imagePath]);
            }
        }

        return redirect()->route('admin.products.index')->with('success', 'Product created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = ['Whole Spices', 'Ground Spices', 'Spice Blends', 'Specialty Items'];
        $units = ['Kg', 'g', 'lb', 'oz'];
        return view('admin.products.edit', compact('product', 'categories', 'units'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $validated = $request->validated();

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image
            $this->imageUploadService->delete($product->image_path);
            
            // Upload new image
            $imagePath = $this->imageUploadService->upload($request->file('image'), $product->id);
            if ($imagePath) {
                $validated['image_path'] = $imagePath;
            }
        }

        $validated['featured'] = $request->has('featured');
        $validated['is_active'] = $request->has('is_active');

        $product->update($validated);

        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        // Delete image
        $this->imageUploadService->delete($product->image_path);
        
        $product->delete();
        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully!');
    }
}
