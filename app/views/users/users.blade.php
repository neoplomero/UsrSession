@extends('layout')

@section('content')
@if(Auth::check())
<div class="container">
    <h1>Users</h1>

    <table class="table table-striped">
        <tr>
            <th>Name</th>
            <th>E-mail</th>
            <th>Address</th>
            <th>Phone</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->address }}</td>
            <td>{{ $user->phone }}</td>
        </tr>
        @endforeach


    </table>
    {{ $users->links() }}
@endif



</div> <!-- /container -->

@endsection