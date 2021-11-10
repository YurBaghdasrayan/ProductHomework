<?php


namespace App\Service;

use App\Models\Product;
use App\Models\User;


class ProductService
{
    public function getUserProducts(User $user)
    {
        return Product::where('user_id', $user->id)->get();
    }
}
