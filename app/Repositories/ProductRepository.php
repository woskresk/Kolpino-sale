<?php

namespace App\Repositories;

use App\Product;

class ProductRepository extends BaseRepository
{
   protected $model;

   public function __construct(Product $product)
   {
       $this->model = $product;
   }
}