@if($errors->any())
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>

    @endforeach
@endif

@if(Session::has('success'))
    <div style="font-family: sans-serif;font-size: 32px;color: #cbd5e0">
        {{Session::get('success')}}
    </div>
@endif

@if(Session::has('error'))
    <div style="font-family: sans-serif;font-size: 32px;color: #cbd5e0">
        {{Session::get('error')}}
    </div>
@endif
