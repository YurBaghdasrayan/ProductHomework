<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function postProduct(Request $request)
    {

        $data = $request->only('product', 'price');

        $data['user_id'] = Auth::user()->id;

        $category = $request->only('category');

        $data['category_id'] = $category['category'];

        $user = Product::create($data);

        return redirect()->route('product-list');

    }
}
