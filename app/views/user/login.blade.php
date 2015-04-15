@extends('layouts.master')

@section('content')


<div class="row">

<div class="col-sm-offset-3 col-sm-6" style="border: 2px solid #eee;border-radius: 10px; margin-top: 20px;padding: 10px;">

    {{ Form::open(['route'=>'login_post', 'autocomplete'=>'off','class'=>'form-horizontal']) }}



        <div class="text-center">
            <header>
                <h2 class="margin0">Sign In</h2>
            </header>

            <p style="margin:10px 0 15px; 0">Don't have an account? Click {{ link_to_route('register_path', 'here') }} to register..</p>
        </div>
        @include('layouts.partials.errors')

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
            <div class="col-sm-offset-3 col-sm-9">
                {{ Form::submit('Log In!', ['class'=>'btn btn-primary']) }}
            </div>

        </div>

    {{ Form::close() }}

    <div class="list-inline text-center margin-bottom-10" style="margin-top: 20px;">
                    <a class="btn rounded btn-facebook btn-facebook-inversed" data-original-title="Facebook"
                        href="/user/login/facebook"><i class="fa fa-facebook"></i> Facebook</a>
                    <a class="btn rounded btn-youtube btn-youtube-inversed" data-original-title="Google"
                        href="{{action('HomeController@loginWithGoogle')}}"><i class="fa fa-google"></i> Google</a>

                </div>
</div>
</div>


@endsection