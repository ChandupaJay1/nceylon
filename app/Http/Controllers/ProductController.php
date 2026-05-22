<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display products with search, filter, and sort
     */
    public function index(Request $request)
    {
        $query = Product::active();

        // Search functionality
        if ($request->has('search') && $request->search) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }

        // Category filter
        if ($request->has('category') && $request->category) {
            $query->where('category', $request->category);
        }

        // Sort functionality
        $sortBy = $request->get('sort_by', 'sort_order');
        switch ($sortBy) {
            case 'name_asc':
                $query->orderBy('name', 'asc');
                break;
            case 'name_desc':
                $query->orderBy('name', 'desc');
                break;
            case 'featured':
                $query->where('featured', true)->orderBy('sort_order');
                break;
            case 'newest':
                $query->orderBy('created_at', 'desc');
                break;
            default:
                $query->orderBy('sort_order', 'asc');
        }

        // Paginate results
        $products = $query->paginate(12);

        // Get unique categories for filter
        $categories = Product::active()->distinct()->pluck('category')->sort();

        // Get featured products for sidebar
        $featuredProducts = Product::active()->featured()->limit(5)->get();

        return view('products', [
            'products' => $products,
            'categories' => $categories,
            'featuredProducts' => $featuredProducts,
            'currentSearch' => $request->search ?? '',
            'currentCategory' => $request->category ?? '',
            'currentSort' => $sortBy,
        ]);
    }

    /**
     * Display single product detail
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->active()->firstOrFail();
        $relatedProducts = Product::active()
            ->where('category', $product->category)
            ->where('id', '!=', $product->id)
            ->limit(4)
            ->get();

        return view('product-detail', [
            'product' => $product,
            'relatedProducts' => $relatedProducts,
        ]);
    }
}
