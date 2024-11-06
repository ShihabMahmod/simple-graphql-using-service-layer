<?php

namespace App\GraphQL\Mutations;

use App\Services\CategoryService;
use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class CategoryMutations
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }
    public function createCategory($root, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        return $this->categoryService->createCategory($args);
    }

    public function updateCategory($root, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        return $this->categoryService->updateCategory($args);
    }

    public function deleteCategory($root, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        return $this->categoryService->deleteCategory($args['id']);
    }
}

