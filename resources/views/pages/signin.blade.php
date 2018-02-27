@extends('layouts.default')

@section('content')



    <div class="card  mt-3 pl-2 pr-2">
        <div class="card-title">
            <h1>Sign In</h1>

            <div class="card-body">
                <form action="#" >
                    {{ csrf_field() }}


                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input name="email" type="email" class="form-control" id="email"
                               placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label for="password">Choose Password</label>
                        <input name="chpass" type="password" class="form-control" id="chpassword"
                               placeholder="Choose Password">
                    </div>


                    <button type="submit" class="btn btn-primary mb-2">Sign In</button>
                </form>
            </div>
        </div>
    </div>
@endsection
