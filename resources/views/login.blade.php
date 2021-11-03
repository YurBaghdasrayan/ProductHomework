@extends('MainBlade.online-market')


@section('content')
    @include('includes.messages')
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
                <div class="card-body p-5">
                    <h2 class="text-uppercase text-center mb-5">Login</h2>

                    <form action="" method="post">
                        @csrf
                        <div class="form-outline mb-4">
                            <input name="email" type="email" id="form3Example3cg" class="form-control form-control-lg"/>
                            <label class="form-label" for="form3Example3cg">Your Email</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input name="password" type="password" id="form3Example4cg"
                                   class="form-control form-control-lg"/>
                            <label class="form-label" for="form3Example4cg">Password</label>
                        </div>

                        <div class="d-flex justify-content-center">
                            <input type="submit" value="Login"
                                   class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">
                        </div>

                        <p class="text-center text-muted mt-5 mb-0">You have not account? <a href="/signup"
                                                                                             class="fw-bold text-body"><u>Signup
                                    here</u></a></p>

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
