@extends('MainBlade.online-market')


@section('content')
    @include('includes.messages')
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
                <div class="card-body p-5">
                    <h2 class="text-uppercase text-center mb-5">Add Cars</h2>
                    <form action="/cars" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-outline mb-4">
                            <input name="brand" type="text" id="form3Example1cg" class="form-control form-control-lg"/>
                            <label class="form-label" for="form3Example1cg">Cars Brand</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input name="color" type="text" id="form3Example3cg" class="form-control form-control-lg"/>
                            <label class="form-label" for="form3Example3cg">Cars Color</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input name="price" type="number" id="form3Example4cg"
                                   class="form-control form-control-lg"/>
                            <label class="form-label" for="form3Example4cg">Cars Price</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input name="img" type="file" id="form3Example4cg" class="form-control form-control-lg"/>
                            <label class="form-label" for="form3Example4cg">Download files</label>
                        </div>
                        <select name="cartypes_id" id="">
                            @foreach($cartypes as $type)
                                <option  value="{{$type->id}}">{{$type->type}}</option>
                            @endforeach
                        </select>
                        <div class="d-flex justify-content-center">
                            <input type="submit" value="Add"
                                   class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
