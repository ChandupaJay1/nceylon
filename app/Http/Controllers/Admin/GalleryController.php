<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Services\ImageUploadService;
use Illuminate\Http\Request;

class GalleryController extends Controller
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
        $galleries = Gallery::orderBy('sort_order')->orderBy('created_at', 'desc')->paginate(15);
        return view('admin.gallery.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = ['General', 'Products', 'Factory', 'Team', 'Events', 'Packaging', 'Certifications'];
        return view('admin.gallery.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'category' => 'required|string',
            'sort_order' => 'nullable|integer',
        ]);

        // Create gallery item first to get ID for image naming
        $gallery = Gallery::create([
            'title' => $validated['title'],
            'description' => $validated['description'] ?? null,
            'image_path' => '', // Temporary
            'category' => $validated['category'],
            'sort_order' => $validated['sort_order'] ?? 0,
            'is_active' => $request->has('is_active'),
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $this->imageUploadService->upload(
                $request->file('image'), 
                $gallery->id, 
                'gallery'
            );
            if ($imagePath) {
                $gallery->update(['image_path' => $imagePath]);
            }
        }

        return redirect()->route('admin.gallery.index')->with('success', 'Gallery item created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        return view('admin.gallery.show', compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        $categories = ['General', 'Products', 'Factory', 'Team', 'Events', 'Packaging', 'Certifications'];
        return view('admin.gallery.edit', compact('gallery', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'category' => 'required|string',
            'sort_order' => 'nullable|integer',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image
            $this->imageUploadService->delete($gallery->image_path);
            
            // Upload new image
            $imagePath = $this->imageUploadService->upload(
                $request->file('image'), 
                $gallery->id,
                'gallery'
            );
            if ($imagePath) {
                $validated['image_path'] = $imagePath;
            }
        }

        $validated['is_active'] = $request->has('is_active');

        $gallery->update($validated);

        return redirect()->route('admin.gallery.index')->with('success', 'Gallery item updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        // Delete image
        $this->imageUploadService->delete($gallery->image_path);
        
        $gallery->delete();
        return redirect()->route('admin.gallery.index')->with('success', 'Gallery item deleted successfully!');
    }
}
