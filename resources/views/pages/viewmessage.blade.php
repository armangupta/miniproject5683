@extends('layouts.default')

@section('content')

    <body>
    <form action="{{route('viewmessage')}}" method="post">
    <div class="card  mt-5 pl-2 pr-2">

        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Subject</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td> <a href="{{route('viewmessage1')}}">Subject of the 1st message</a></td>
                    <td> <button type="submit" name="delete" class="btn btn-primary mb-2">Delete</button></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td> <a href="{{route('viewmessage1')}}">Subject of the 2nd message</a></td>
                    <td> <button type="submit" name="delete1" class="btn btn-primary mb-2">Delete</button></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    </form>
    </body>
@endsection