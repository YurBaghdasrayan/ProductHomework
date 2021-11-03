@extends('MainBlade.online-market')


@section('content')
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="section vh-100 bg-image">
                            <h1>WELCOME YOUR PROFILE {{Auth::user()->name}} YOU CAN ADD  <a class="h1" href="/product">PRODUCTS</a> & <a class="h1" href="/cars">CARS</a></h1>
                        </div>
                    </div>
                </div>
@endsection
@section('logout')
    <form action="/logout" method="post" enctype="multipart/form-data">
        @csrf
        <input class="logout" type="submit" value="logout">
    </form>
@endsection
