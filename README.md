# NCEYLON - Premium Sri Lankan Spices Export Platform

A modern, full-featured e-commerce platform for NCEYLON, a premium Ceylon spices exporter. Built with Laravel 11, Tailwind CSS, and featuring a complete product management system with admin panel.

## 🌟 Features

### Frontend
- **Modern, Responsive Design** - Mobile-first approach with Tailwind CSS
- **Hero Slider** - Cinematic hero section with auto-rotating slides
- **Product Catalog** - Browse spices with search, filter, and sort functionality
- **Category Filtering** - Filter products by category
- **Advanced Search** - Search by product name and description
- **Sort Options** - Sort by featured, name, or newest
- **Pagination** - 12 products per page
- **Premium Preloader** - Animated spice-themed loading screen
- **Responsive Footer** - 8-column spice image mosaic with newsletter signup
- **About Page** - Company story and heritage
- **Contact Page** - Contact form and business information
- **Quotations Page** - Wholesale pricing plans and request forms

### Admin Panel
- **Product Management** - Full CRUD operations
- **Image Upload** - Upload product images with preview
- **Product Details** - Name, description, category, unit, price, stock status
- **Featured Products** - Mark products as featured
- **Sort Order** - Control product display order
- **Pagination** - 15 products per page in admin list
- **Form Validation** - Comprehensive validation with error messages

### Database
- **Products Table** - Complete product information storage
- **Image Management** - Automatic image upload and deletion
- **Timestamps** - Track creation and update times
- **Scopes** - Query scopes for active, featured, and category filtering

## 🛠️ Tech Stack

- **Backend**: Laravel 11
- **Frontend**: Blade Templates, Tailwind CSS
- **Database**: MySQL
- **Build Tool**: Vite
- **Package Manager**: Composer, npm
- **Version Control**: Git

## � Project Structure

```
nceylon/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── ProductController.php          # Frontend product controller
│   │   │   └── Admin/ProductController.php    # Admin product controller
│   │   └── Requests/
│   │       ├── StoreProductRequest.php        # Create validation
│   │       └── UpdateProductRequest.php       # Update validation
│   ├── Models/
│   │   └── Product.php                        # Product model with scopes
│   └── Services/
│       └── ImageUploadService.php             # Image upload handling
├── database/
│   ├── migrations/
│   │   └── 2026_05_22_064749_create_products_table.php
│   └── seeders/
│       └── ProductSeeder.php                  # Sample data
├── resources/
│   ├── views/
│   │   ├── layouts/master.blade.php           # Main layout
│   │   ├── index.blade.php                    # Homepage
│   │   ├── products.blade.php                 # Product listing
│   │   ├── about.blade.php                    # About page
│   │   ├── contact.blade.php                  # Contact page
│   │   ├── quotations.blade.php               # Quotations page
│   │   └── admin/products/                    # Admin views
│   ├── css/app.css                            # Tailwind CSS
│   └── js/app.js                              # JavaScript
├── public/
│   ├── assets/
│   │   ├── spices/imag/                       # Sample spice images
│   │   └── spices/products/                   # Uploaded product images
│   └── build/                                 # Compiled assets
├── routes/
│   └── web.php                                # All routes
└── config/                                    # Configuration files
```

## 🚀 Installation & Setup

### Prerequisites
- PHP 8.2+
- Composer
- Node.js & npm
- MySQL 8.0+
- Git

### Steps

1. **Clone Repository**
```bash
git clone git@github.com:ChandupaJay1/nceylon.git
cd nceylon
```

2. **Install Dependencies**
```bash
composer install
npm install
```

3. **Environment Setup**
```bash
cp .env.example .env
php artisan key:generate
```

4. **Configure Database**
Edit `.env`:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nceylon_db
DB_USERNAME=root
DB_PASSWORD=your_password
```

5. **Run Migrations**
```bash
php artisan migrate
```

6. **Seed Sample Data**
```bash
php artisan db:seed --class=ProductSeeder
```

7. **Build Assets**
```bash
npm run build
```

8. **Start Development Server**
```bash
php artisan serve
```

Visit `http://localhost:8000`

## 📊 Database Schema

### Products Table
```sql
- id (Primary Key)
- name (string)
- slug (string, unique)
- description (text, nullable)
- image_path (string, nullable)
- category (string)
- unit (string) - Kg, g, lb, oz
- price (decimal, nullable)
- stock_status (enum) - In Stock, Out of Stock, Pre-Order
- featured (boolean)
- sort_order (integer)
- is_active (boolean)
- created_at, updated_at (timestamps)
```

## 🎯 Routes

### Frontend Routes
```
GET  /                    - Homepage
GET  /about               - About page
GET  /products            - Product listing with filters
GET  /contact             - Contact page
GET  /quotations          - Quotations page
GET  /privacy-policy      - Privacy policy
```

### Admin Routes
```
GET    /admin/products              - List products
GET    /admin/products/create       - Create form
POST   /admin/products              - Store product
GET    /admin/products/{id}/edit    - Edit form
PUT    /admin/products/{id}         - Update product
DELETE /admin/products/{id}         - Delete product
```

## 🖼️ Sample Products

10 pre-loaded products:
1. Ceylon Cinnamon Sticks
2. Black Pepper Whole
3. Green Cardamom Pods
4. Whole Cloves
5. Turmeric Powder
6. Cinnamon Powder
7. Curry Powder - Mild
8. Curry Powder - Hot
9. Nutmeg Whole
10. Red Chilli Powder

## 📸 Image Management

- **Upload Location**: `public/assets/spices/products/`
- **Filename Format**: `product-{id}-{random}.{extension}`
- **Supported Formats**: JPEG, PNG, JPG, GIF, WebP
- **Max Size**: 5MB
- **Auto-deletion**: Old images deleted when updating

## 🔍 Search & Filter Features

### Search
- Search by product name
- Search by description
- Real-time filtering

### Categories
- Whole Spices
- Ground Spices
- Spice Blends
- Specialty Items

### Sort Options
- Featured (default)
- Name A-Z
- Name Z-A
- Featured Only
- Newest

## � Design Features

- **Modern UI** - Clean, professional design
- **Responsive** - Mobile, tablet, desktop optimized
- **Animations** - Smooth transitions and hover effects
- **Color Scheme** - Spice-themed colors (terracotta, gold, green)
- **Typography** - Professional font hierarchy
- **Accessibility** - WCAG compliant

## 🔐 Security

- Form validation on both client and server
- CSRF protection
- SQL injection prevention
- File upload validation
- Error handling and logging

## 📝 API Documentation

See `PRODUCT_SYSTEM_GUIDE.md` for detailed API documentation and usage examples.

## 🤝 Contributing

1. Create a feature branch (`git checkout -b feature/amazing-feature`)
2. Commit changes (`git commit -m 'Add amazing feature'`)
3. Push to branch (`git push origin feature/amazing-feature`)
4. Open a Pull Request

## 📄 License

This project is proprietary and confidential.

## 👤 Author

**Chandupa Jay**
- GitHub: [@ChandupaJay1](https://github.com/ChandupaJay1)

## 📞 Support

For support, email info@nceylon.com or visit the contact page.

## 🎯 Future Enhancements

- [ ] Shopping cart functionality
- [ ] Payment gateway integration
- [ ] User authentication
- [ ] Order management system
- [ ] Email notifications
- [ ] Analytics dashboard
- [ ] Multi-language support
- [ ] API endpoints for mobile app

---

**Status**: ✅ Production Ready
**Last Updated**: May 22, 2026
**Version**: 1.0.0
