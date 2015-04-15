@extends('layouts.master')

@section('content')
<div class="row">

<div class="col-sm-offset-3 col-sm-6" style="border: 2px solid #eee;border-radius: 10px; margin-top: 20px;">

    {{ Form::open(['route'=>'register_post', 'autocomplete'=>'off','class'=>'form-horizontal']) }}



        <div class="text-center">
            <header>
                <h2 class="margin0">Register</h2>
            </header>

            <div class="list-inline text-center margin-bottom-10" style="margin: 10px 0 10px;">

                <a class="btn rounded btn-facebook btn-facebook-inversed" data-original-title="Facebook"
                    href="{{action('HomeController@loginWithFacebook')}}"><i class="fa fa-facebook"></i> Facebook</a>
                <a class="btn rounded btn-youtube btn-youtube-inversed" data-original-title="Google"
                    href="{{action('HomeController@loginWithGoogle')}}"><i class="fa fa-google"></i> Google</a>
            </div>

            <p>Already registered? Click {{ HTML::linkRoute('login', 'here' )}} to sign in.</p>
        </div>
        @include('layouts.partials.errors')

        <div class="form-group">
            {{ Form::label('username', 'Username: ', ['class'=>'col-sm-3 control-label']) }}
            <div class="col-sm-9">
                {{ Form::text('username', null, ['class'=>'form-control','placeholder'=>'Username']) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('email', 'Email: ', ['class'=>'col-sm-3 control-label']) }}
            <div class="col-sm-9">
                {{ Form::text('email', null, ['class'=>'form-control','placeholder'=>'Email']) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('password', 'Password: ', ['class'=>'col-sm-3 control-label']) }}
            <div class="col-sm-9">
                {{ Form::password('password', ['class'=>'form-control','placeholder'=>'Password']) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('password_confirmation', 'Password Again: ', ['class'=>'col-sm-3 control-label']) }}
            <div class="col-sm-9">
                {{ Form::password('password_confirmation', ['class'=>'form-control','placeholder'=>'Confirm Password']) }}
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
              <div class="checkbox">
                <label>
                    {{ Form::checkbox('terms', 1, null, ['required'])  }} I have read the terms and condition
                </label>
              </div>
            </div>
          </div>

        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                {{ Form::submit('Sign Up!', ['class'=>'btn btn-primary']) }}
            </div>

        </div>

    {{ Form::close() }}
</div>
</div>
@endsection