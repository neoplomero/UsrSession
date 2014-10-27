@extends('layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>Edit your account</h1>
            {{ Form::model($user, ['route' => 'update_account', 'method' => 'PUT', 'role' => 'form', 'novalidate']) }}
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



             <div class="container"></div>

             <p >
                <input type="submit" name="edit" value="edit" class="btn btn-success">
             </p>
             <p >
                <input type="submit" name="delete" value="delete" class="btn btn-danger">
              </p>



              </div>
             {{ Form::close() }}
              {{ Form::close() }}




        </div>
    </div>
</div>

@endsection