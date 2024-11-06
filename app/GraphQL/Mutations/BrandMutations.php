<?php

namespace App\GraphQL\Mutations;

use App\Services\BrandService;
use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class BrandMutations
{
    protected $brandService;

    public function __construct(BrandService $brandService)
    {
        $this->brandService = $brandService;
    }

    public function createBrand($root, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        return $this->brandService->createBrand($args);
    }

    public function updateBrand($root, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        return $this->brandService->updateBrand($args);
    }

    public function deleteBrand($root, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        return $this->brandService->deleteBrand($args['id']);
    }
}

