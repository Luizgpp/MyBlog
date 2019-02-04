@extends('layouts.app')

@section('content')

<div class="columns">
    <div class="column is-one-third is-offset-one-third">
        <div class="card m-t-75">
            <div class="card-content">
                <h1 class="title">Login</h1>
                <form action="{{ route('login') }}" method="POST" role="form">
                    {{ csrf_field() }}
                    <div class="field">
                        <label for="email" class="label">Email Address</label>
                        <p class="control has-icons-left">
                            <span class="icon is-small is-left">
                                <b-icon icon="email"></b-icon>                                
                            </span>
                            <input class="input {{$errors->has('email')? 'is-danger':''}} " type="text" name="email" id="email" placeholder="name@example.com" value="{{old('email')}}">                            
                            @if ($errors->has('email'))
                                <p class="help is-danger">{{$errors->first('email')}}</p>
                            @endif
                        </p>  
                    </div>                   
                    <div class="field">
                        <label for="password" class="label">Password</label>
                        <p class="control has-icons-left">
                            <span class="icon is-small is-left">
                                <b-icon icon="lock"></b-icon>                                
                            </span>                                
                            <input class="input {{$errors->has('password')? 'is-danger':''}}" type="text" name="password" id="password" placeholder="**********">                            
                        </p>
                        @if ($errors->has('password'))
                            <p class="help is-danger"> {{$errors->first('password')}}</p>
                        @endif
                    </div>
                        <b-checkbox name="remember" class="m-t-30">Remember Me</b-checkbox>    
                        <button class="button is-primary is-fullwidth m-t-30">Log In</button>                    
                </form>
            </div><!-- end of .card-content -->            
        </div><!-- end of .card -->
        <h5 class="has-text-centered m-t-20"><a class="is-muted" href="{{route('password.request')}}">I Forgot My Password</a></h5>
    </div>
</div>

@endsection
