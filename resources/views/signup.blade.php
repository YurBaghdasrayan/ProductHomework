@extends('MainBlade.online-market')


@section('content')
    @include('includes.messages')

    <div class="section">
        <form action="/signup" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp" name="name">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <input type="file" name="img">
            <input type="submit" class="btn btn-primary" value="Submit">
        </form>

    </div>


@endsection
