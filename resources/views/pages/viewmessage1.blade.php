@extends('layouts.default')

@section('content')

    <body>
    <div class="card  mt-5 pl-2 pr-2">

        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>Subject</th>
                    <th>E-mail</th>
                    <th>Message</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Subject of the message</td>
                    <td>From E-mail</td>
                    <td>Text of the message</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    </body>
@endsection