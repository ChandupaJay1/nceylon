<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

class ImageUploadService
{
    /**
     * Upload image to products or gallery directory
     * 
     * @param UploadedFile $file
     * @param int $itemId
     * @param string $type (product or gallery)
     * @return string|null
     */
    public function upload(UploadedFile $file, int $itemId, string $type = 'product'): ?string
    {
        try {
            $prefix   = $type === 'gallery' ? 'gallery' : 'product';
            $filename = $prefix . '-' . $itemId . '-' . Str::random(10) . '.' . $file->getClientOriginalExtension();

            if ($type === 'gallery') {
                // Save directly into public/assets/gallery/
                $destination = public_path('assets/gallery');
                if (!file_exists($destination)) {
                    mkdir($destination, 0755, true);
                }
                $file->move($destination, $filename);
                // Return the relative path used by asset()
                return 'assets/gallery/' . $filename;
            }

            // Products — keep using Laravel storage disk
            $directory = 'assets/spices/products';
            $path = $file->storeAs($directory, $filename, 'public');
            return $path;

        } catch (\Exception $e) {
            \Log::error('Image upload failed: ' . $e->getMessage());
            return null;
        }
    }

    /**
     * Delete old image if exists
     * 
     * @param string|null $imagePath
     * @return bool
     */
    public function delete(?string $imagePath): bool
    {
        if (!$imagePath) {
            return true;
        }

        try {
            // Gallery images live in public/assets/gallery/
            if (str_starts_with($imagePath, 'assets/gallery/')) {
                $fullPath = public_path($imagePath);
                if (file_exists($fullPath)) {
                    unlink($fullPath);
                }
                return true;
            }

            // Product images use Laravel storage disk
            \Storage::disk('public')->delete($imagePath);
            return true;

        } catch (\Exception $e) {
            \Log::error('Image deletion failed: ' . $e->getMessage());
            return false;
        }
    }
}
