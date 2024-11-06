<?php

namespace App\Services;

use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Exception;

class ProductService
{
    public function createProduct(array $data): Product
    {
       
        if ($data['price'] < 0) {
            throw new Exception('Price must be a positive value.');
        }

        $category = Category::find($data['category_id']);
        if (!$category) {
            throw new Exception('Invalid category ID.');
        }
        $brand = Brand::find($data['brand_id']);
        if (!$brand) {
            throw new Exception('Invalid brand ID.');
        }

        $product = new Product($data);
        $product->save();

        return $product;
    }

    public function updateProduct(array $data): Product
    {
        $product = Product::find($data['id']);

        if (!$product) {
            throw new Exception('Product not found.');
        }

        // Apply updates, with additional checks if necessary
        $product->fill($data);
        $product->save();

        return $product;
    }

    public function deleteProduct(int $id): bool
    {
        $product = Product::find($id);

        if (!$product) {
            throw new Exception('Product not found.');
        }

        return $product->delete();
    }
}
