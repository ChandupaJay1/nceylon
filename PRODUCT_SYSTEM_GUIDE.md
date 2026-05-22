# NCEYLON Product Management System - Complete Guide

## 🎯 System Overview

A complete product management system with admin panel and frontend integration for managing Ceylon spices.

---

## 📊 Database Structure

### Products Table
```
- id (Primary Key)
- name (Product name)
- slug (URL-friendly name - auto-generated)
- description (Product details)
- image_path (Path to product image)
- category (Whole Spices, Ground Spices, Spice Blends, Specialty Items)
- unit (Kg, g, lb, oz)
- price (Optional - can be NULL)
- stock_status (In Stock, Out of Stock, Pre-Order)
- featured (Boolean - featured product)
- sort_order (Integer - display order)
- is_active (Boolean - active/inactive)
- created_at, updated_at (Timestamps)
```

---

## 🛠️ Admin Panel

### Access Admin Panel
```
URL: http://localhost/admin/products
```

### Admin Features

#### 1. **View All Products**
- Route: `/admin/products`
- Shows all products in a table format
- Displays: Name, Category, Unit, Stock Status, Featured, Active status
- Pagination: 15 products per page

#### 2. **Add New Product**
- Route: `/admin/products/create`
- Form fields:
  - Product Name (required)
  - Description (optional)
  - Image Path (optional)
  - Category (required)
  - Unit (required)
  - Price (optional)
  - Stock Status (required)
  - Sort Order (optional)
  - Featured checkbox
  - Active checkbox

#### 3. **Edit Product**
- Route: `/admin/products/{id}/edit`
- Same form as create with pre-filled data
- Shows current image preview

#### 4. **Delete Product**
- Route: `/admin/products/{id}` (DELETE)
- Confirmation dialog before deletion

---

## 🎨 Frontend Product Display

### Product Listing Page
```
URL: http://localhost/products
```

### Features

#### 1. **Search**
- Search by product name or description
- Real-time filtering
- Query parameter: `?search=cinnamon`

#### 2. **Category Filter**
- Filter by product category
- Shows count of products in each category
- Query parameter: `?category=Whole%20Spices`

#### 3. **Sort Options**
- **Featured** - Default sort order
- **Name A-Z** - Alphabetical ascending
- **Name Z-A** - Alphabetical descending
- **Featured Only** - Only featured products
- **Newest** - Recently added products
- Query parameter: `?sort_by=name_asc`

#### 4. **Pagination**
- 12 products per page
- Automatic pagination links

#### 5. **Product Card Display**
- Product image
- Category badge
- Stock status badge
- Product name
- Description (truncated)
- Featured indicator
- "Request Quote" button

---

## 📝 Sample Products

10 sample products are pre-loaded:

1. **Ceylon Cinnamon Sticks** - Whole Spices, Kg, Featured
2. **Black Pepper Whole** - Whole Spices, Kg, Featured
3. **Green Cardamom Pods** - Whole Spices, Kg, Featured
4. **Whole Cloves** - Whole Spices, Kg
5. **Turmeric Powder** - Ground Spices, Kg, Featured
6. **Cinnamon Powder** - Ground Spices, Kg
7. **Curry Powder - Mild** - Spice Blends, Kg
8. **Curry Powder - Hot** - Spice Blends, Kg
9. **Nutmeg Whole** - Whole Spices, Kg
10. **Red Chilli Powder** - Ground Spices, Kg, Featured

---

## 🖼️ Image Paths

Available images in `public/assets/spices/imag/`:
- `spices1.jpg` through `spices8.jpg`
- `chilli.jpg`
- `spices.jpg`

Use these paths in the Image Path field:
```
assets/spices/imag/spices1.jpg
assets/spices/imag/chilli.jpg
```

---

## 🔧 API Routes

### Admin Routes
```
GET    /admin/products              - List all products
GET    /admin/products/create       - Show create form
POST   /admin/products              - Store new product
GET    /admin/products/{id}/edit    - Show edit form
PUT    /admin/products/{id}         - Update product
DELETE /admin/products/{id}         - Delete product
```

### Frontend Routes
```
GET /products                  - List products with filters
GET /products?search=...       - Search products
GET /products?category=...     - Filter by category
GET /products?sort_by=...      - Sort products
```

---

## 💾 Database Commands

### Run Migration
```bash
php artisan migrate
```

### Seed Sample Data
```bash
php artisan db:seed --class=ProductSeeder
```

### Reset Database
```bash
php artisan migrate:refresh --seed
```

---

## 📂 File Structure

```
app/
├── Models/
│   └── Product.php                    # Product model with scopes
├── Http/
│   └── Controllers/
│       ├── ProductController.php      # Frontend product controller
│       └── Admin/
│           └── ProductController.php  # Admin product controller

database/
├── migrations/
│   └── 2026_05_22_064749_create_products_table.php
└── seeders/
    └── ProductSeeder.php

resources/views/
├── products.blade.php                 # Frontend product listing
└── admin/products/
    ├── index.blade.php               # Admin product list
    ├── create.blade.php              # Admin create form
    └── edit.blade.php                # Admin edit form

routes/
└── web.php                            # All routes defined
```

---

## 🚀 Quick Start

### 1. Add a New Product via Admin
1. Go to `http://localhost/admin/products`
2. Click "Add New Product"
3. Fill in the form:
   - Name: "Ceylon Cinnamon"
   - Category: "Whole Spices"
   - Unit: "Kg"
   - Image Path: "assets/spices/imag/spices1.jpg"
   - Stock Status: "In Stock"
4. Click "Create Product"

### 2. View Products on Frontend
1. Go to `http://localhost/products`
2. Use search, category filter, or sort options
3. Click "Request Quote" on any product

### 3. Edit a Product
1. Go to `/admin/products`
2. Click edit icon on any product
3. Update fields
4. Click "Update Product"

### 4. Delete a Product
1. Go to `/admin/products`
2. Click delete icon
3. Confirm deletion

---

## 🔍 Product Model Scopes

Available query scopes in `Product` model:

```php
// Get only active products
Product::active()->get()

// Get featured products
Product::featured()->get()

// Get products by category
Product::category('Whole Spices')->get()

// Combine scopes
Product::active()->featured()->category('Whole Spices')->get()
```

---

## 📋 Validation Rules

### Product Creation/Update
- **name**: Required, string, max 255 characters
- **description**: Optional, string
- **image_path**: Optional, string
- **category**: Required, string
- **unit**: Required, string
- **price**: Optional, numeric, min 0
- **stock_status**: Required, one of: "In Stock", "Out of Stock", "Pre-Order"
- **featured**: Boolean
- **sort_order**: Optional, integer
- **is_active**: Boolean

---

## 🎯 Next Steps

1. **Add More Products** - Use admin panel to add your spices
2. **Upload Custom Images** - Replace image paths with your own
3. **Set Prices** - Add pricing information if needed
4. **Add Authentication** - Secure admin panel with login
5. **Add to Cart** - Implement shopping cart functionality
6. **Payment Integration** - Add payment gateway

---

## 📞 Support

For issues or questions, check:
- Admin panel at `/admin/products`
- Frontend at `/products`
- Database: `nceylon_db` table: `products`

---

**System Created:** May 22, 2026
**Status:** ✅ Fully Functional
