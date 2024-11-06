<?php

namespace App\Services;

use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Exception;

class CategoryService
{
    public function createCategory(array $data): Category
    {
        $category = new Category($data);
        $category->save();
        return $category;
    }

    public function updateCategory(array $data): Category
    {
        $category = Category::find($data['id']);

        if (!$category) {
            throw new Exception('Product not found.');
        }
        $category->fill($data);
        $category->save();

        return $category;
    }

    public function deleteCategory(int $id): bool
    {
        $category = Category::find($id);

        if (!$category) {
            throw new Exception('Product not found.');
        }
        return $category->delete();
    }
}
