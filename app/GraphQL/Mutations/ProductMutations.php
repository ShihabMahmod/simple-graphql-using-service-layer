<?php

namespace App\GraphQL\Mutations;

use App\Services\ProductService;
use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class ProductMutations
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function createProduct($root, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        return $this->productService->createProduct($args);
    }

    public function updateProduct($root, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        return $this->productService->updateProduct($args);
    }

    public function deleteProduct($root, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        return $this->productService->deleteProduct($args['id']);
    }
}

