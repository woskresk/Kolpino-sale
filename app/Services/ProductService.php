<?php

namespace App\Services;

use App\Repositories\ProductRepository;

class ProductService extends BaseService
{
    public $repo;

   public function __construct(ProductRepository $productRepository)
   {
       $this->repo = $productRepository;
   }
   
}