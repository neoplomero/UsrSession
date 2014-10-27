@extends('layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>Sign up</h1>
            {{ Form::open(['route' => 'register', 'method' => 'POST', 'role' => 'form', 'validate']) }}
            <div class="form-group">
              {{Form::label('name', 'Name')}}
              {{Form::text('name', null, ['class' => 'form-control'] )}}
              {{$errors->first('name', '<p class="error_message">:message</p>')}}
            </div>

            <div class="form-group">
              {{Form::label('address', 'Address')}}
              {{Form::text('address', null, ['class' => 'form-control'] )}}
              {{$errors->first('address',  '<p class="error_message">:message</p>')}}
            </div>
            <div class="form-group">
              {{Form::label('phone', 'Phone number')}}
              {{Form::text('phone', null, ['class' => 'form-control'] )}}
              {{$errors->first('phone',  '<p class="error_message">:message</p>')}}
            </div>
             <div class="form-group">
              {{Form::label('email', 'Email')}}
              {{Form::email('email', null, ['class' => 'form-control'] )}}
              {{$errors->first('email',  '<p class="error_message">:message</p>')}}
            </div>
            <div class="form-group">
              {{Form::label('password', 'Password')}}
              {{Form::password('password',  ['class' => 'form-control'] )}}
              {{$errors->first('password',  '<p class="error_message">:message</p>')}}
            </div>
            <div class="form-group">
              {{Form::label('password_confirmation', 'Repeat your password')}}
              {{Form::password('password_confirmation', ['class' => 'form-control'] )}}
               {{$errors->first('password_confirmation',  '<p class="error_message">:message</p>')}}
            </div>




              <p>
                <input type="submit" value="Register" class="btn btn-success">
              </p>
              {{ Form::close() }}




        </div>
    </div>
</div>

@endsection