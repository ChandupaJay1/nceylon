<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

class ImageUploadService
{
    /**
     * Upload image to products directory
     * 
     * @param UploadedFile $file
     * @param int $productId
     * @return string|null
     */
    public function upload(UploadedFile $file, int $productId): ?string
    {
        try {
            // Generate unique filename with product ID
            $filename = 'product-' . $productId . '-' . Str::random(10) . '.' . $file->getClientOriginalExtension();
            
            // Store file in public/assets/spices/products
            $path = $file->storeAs(
                'assets/spices/products',
                $filename,
                'public'
            );

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
            \Storage::disk('public')->delete($imagePath);
            return true;
        } catch (\Exception $e) {
            \Log::error('Image deletion failed: ' . $e->getMessage());
            return false;
        }
    }
}
