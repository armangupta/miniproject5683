@extends('layouts.default')

@section('content')


    <div class="card  mt-3 pl-2 pr-2">
        <div class="card-title">
            <h1>Sign Up</h1>

            <div class="card-body">
                <form action="#" >
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="fname">First Name</label>
                        <input name="fnaame" type="text" class="form-control" id="fname"
                               placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <label for="lname">Last Name</label>
                        <input name="lnaame" type="text" class="form-control" id="lname"
                               placeholder="Last Name">
                    </div>
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

                    <div class="form-group">
                        <label for="password">Confirm Password</label>
                        <input name="copass" type="password" class="form-control" id="copassword"
                               placeholder="Confirm Password">
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
@endsection
