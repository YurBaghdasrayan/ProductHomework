@extends('MainBlade.online-market')

@section('content')
    @foreach($cars as $car)
        <ul>
            <li class="h6">PRODUCT BRAND: {{$car->brand}}</li>
            <li class="h6">PRODUCT COLOR: {{$car->color}}</li>
            <li class="h6">PRODUCT PRICE: {{$car->price}}</li>
        </ul>
        <hr>
    @endforeach
@endsection
