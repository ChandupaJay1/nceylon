<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            // Change enum to string so it can hold any value from stock_statuses table
            $table->string('stock_status')->default('In Stock')->change();
        });
    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->enum('stock_status', ['In Stock', 'Out of Stock', 'Pre-Order'])->default('In Stock')->change();
        });
    }
};
