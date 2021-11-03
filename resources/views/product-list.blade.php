@extends('MainBlade.online-market')

@section('content')

    @foreach($products as $value)
        <div class="listTable">
            <ul>
                <li class="h6">PRODUCT ID: {{$value->category_id}}</li>
                <li class="h6">PERSONAL ID: {{$value->user_id}}</li>
                <li class="h6">PRODUCT NAME: {{$value->product}}</li>
                <li class="h6">PRODUCT PRICE: {{$value->price}}</li>
                <li class="h6">{{$value->user->name}}</li>
            </ul>
        </div>
        <hr>
    @endforeach


@endsection

