@extends('MainBlade.online-market')


@section('content')

   <div class="section">
       <form action="" method="POST">
           @csrf
           <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Add Product</label>
               <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="product">
           </div>
           <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Add Price</label>
               <input type="number" class="form-control" id="exampleInputPassword1" name="price">
           </div>
           <label for="category" class="form-label">Select Type</label>
           <select class="form-select" aria-label="Default select example" name="category">
               <option  value="1">Fruits</option>
               <option  value="2">Vegetables</option>
           </select><br>
           <input type="submit" class="btn btn-primary" value="Submit">
       </form>
   </div>

@endsection
