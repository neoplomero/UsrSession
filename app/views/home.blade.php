@extends('layout')

@section('content')

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>UsrSession</h1>

        <p class="col-md-8">
           A simple website to show an User Session Example developed with Laravel, a small site for the world, a big ticket for me (=.
            <br/>
            <br/>
            <a href="mailto:neoplomero@gmail.com">
                neoplomero@gmail.com
            </a>
        </p>
        @if (! Auth::check())
        <p><a href='{{route('sign_up')}}' class="btn btn-primary btn-lg" role="button">Sign Up </a></p>
        @endif
    </div>
</div>
@if(Session::has('user_deleted'))
     <div >
        <p class="btn bg-danger  center-block col-md-12">User Deleted!</p>
     </div>
@endif
@if(Session::has('need_login'))
     <div >
        <p class="btn bg-primary  center-block col-md-12">You need to Sign in</p>
     </div>
@endif

<div class="container">
    <h1>hola soy un nuevo h1</h1>
    <h1>Some of our <a href='{{route('users')}}'>Users</a>, the last ones registered.</h1>


    @if (! Auth::check())
    <p>Want to see the full info? Sign-in</p>

    <div class="container col-md-4">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Name</th>

        </tr>
        </thead>

        <tbody>
         @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>


        </tr>
        @endforeach
        </tbody>
    </table>
    </div>

    @else
    <table class="table table-striped">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone-number</th>
            </tr>
            </thead>

            <tbody>
             @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->address}}</td>
                <td>{{$user->phone}}</td>

            </tr>
            @endforeach
            </tbody>
    </table>

    @endif






</div> <!-- /container -->

@stop