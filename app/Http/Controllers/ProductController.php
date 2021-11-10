<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCarsRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cars;
use App\Service\ProductService;

class ProductController extends Controller
{
    public function postProduct(Request $request)
    {

        $data = $request->only('product', 'price', 'category_id');

        $data['user_id'] = Auth::user()->id;

        $user = Product::create($data);

        return redirect()->route('product-list');

    }

    public function postCars(CreateCarsRequest $request)
    {


        $data = $request->validated();


        $data['user_id'] = Auth::user()->id;

        $car = Cars::create($data);

        $imagePath = $data['img']->store('car_img');

        $car->img_path = $imagePath;

        $car->save();

        return redirect()->route('carslist');

    }

    public function getApiProducts()
    {
        return response()->json(
            (new ProductService())->getUserProducts(Auth::user())
        );
    }
}
