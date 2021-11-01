@extends('MainBlade.online-market')


@section('content')
    <div class="section">
        <h1>WELCOME YOUR PROFILE YOU CAN <a class="h1" href="/product"> ADD PRODUCTS</a></h1>
    </div>
    <h1>hello {{Auth::user()->name}}</h1>
    <div>
            @foreach($products as $product)
                <ul>
                    <li>{{$product->name}}</li>
                    <li>{{$product->price}}</li>
                </ul>
            @endforeach
    </div>
    <h1>efdsdf</h1>
    <form action="/logout" method="post" enctype="multipart/form-data">
        @csrf
        <input type="submit" value="logout">
    </form>
@endsection
