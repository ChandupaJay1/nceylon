<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120', // 5MB max
            'category' => 'required|string',
            'unit' => 'required|string',
            'price' => 'nullable|numeric|min:0',
            'stock_status' => 'required|in:In Stock,Out of Stock,Pre-Order',
            'featured' => 'boolean',
            'sort_order' => 'nullable|integer',
            'is_active' => 'boolean',
        ];
    }

    /**
     * Get custom messages for validation errors.
     */
    public function messages(): array
    {
        return [
            'image.image' => 'The file must be an image.',
            'image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif, webp.',
            'image.max' => 'The image may not be greater than 5MB.',
            'name.required' => 'Product name is required.',
            'category.required' => 'Category is required.',
            'unit.required' => 'Unit is required.',
            'stock_status.required' => 'Stock status is required.',
        ];
    }
}
