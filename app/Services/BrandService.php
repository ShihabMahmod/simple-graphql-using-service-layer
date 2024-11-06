<?php

namespace App\Services;

use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Exception;

class BrandService
{
    public function createBrand(array $data): Brand
    {
       
        $brand = new Brand($data);
        $brand->save();

        return $brand;
    }

    public function updateBrand(array $data): Brand
    {
        $brand = Brand::find($data['id']);

        if (!$brand) {
            throw new Exception('Brand not found.');
        }
        $brand->fill($data);
        $brand->save();

        return $brand;
    }

    public function deleteBrand(int $id): bool
    {
        $brand = Brand::find($id);

        if (!$brand) {
            throw new Exception('Brand not found.');
        }
        return $brand->delete();
    }
}
