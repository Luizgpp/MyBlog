@extends('layouts.app')

@section('content')

<div class="columns">
        <div class="column is-one-third is-offset-one-third">
            <div class="card m-t-75">
                <div class="card-content">
                    <h1 class="title">Join the Community</h1>
                    <form action="{{route('register')}}" method="POST" role="form">
                        {{ csrf_field() }}
                        <div class="field">
                                <label for="name" class="label">Name</label>
                                <p class="control has-icons-left">
                                    <span class="icon is-small is-left">
                                        <b-icon icon="account"></b-icon>                                
                                    </span>
                                    <input class="input {{$errors->has('name')? 'is-danger':''}} " type="text" name="name" id="name" placeholder="Your Name Here" value="{{old('name')}}" required>                            
                                    @if ($errors->has('name'))
                                        <p class="help is-danger">{{$errors->first('name')}}</p>
                                    @endif
                                </p>  
                            </div>       
                        <div class="field">
                            <label for="email" class="label">Email Address</label>
                            <p class="control has-icons-left">
                                <span class="icon is-small is-left">
                                    <b-icon icon="email"></b-icon>                                
                                </span>
                                <input class="input {{$errors->has('email')? 'is-danger':''}} " type="text" name="email" id="email" placeholder="name@example.com" value="{{old('email')}}" required>                            
                                @if ($errors->has('email'))
                                    <p class="help is-danger">{{$errors->first('email')}}</p>
                                @endif
                            </p>  
                        </div>                   
                        <div class="columns">
                          <div class="column">
                                <div class="field">
                                    <label for="password" class="label">Password</label>
                                    <p class="control has-icons-left">
                                        <span class="icon is-small is-left">
                                            <b-icon icon="lock"></b-icon>                                
                                        </span>                                
                                        <input class="input {{$errors->has('password')? 'is-danger':''}}" type="password" name="password" id="password" placeholder="**********" required>                            
                                    </p>
                                    @if ($errors->has('password'))
                                        <p class="help is-danger"> {{$errors->first('password')}}</p>
                                    @endif
                                </div>
                          </div>
                            <div class="column">
                                <div class="field">
                                    <label for="password_confirmation" class="label">Confirm Password</label>
                                    <p class="control has-icons-left">
                                        <span class="icon is-small is-left">
                                            <b-icon icon="lock"></b-icon>                                
                                        </span>                                
                                        <input class="input {{$errors->has('password_confirmation')? 'is-danger':''}}" type="password" name="password_confirmation" id="password_confirmation" placeholder="**********" required>                            
                                    </p>
                                    @if ($errors->has('password_confirmation'))
                                        <p class="help is-danger"> {{$errors->first('password_confirmation')}}</p>
                                    @endif
                                </div> 
                            </div>   
                        </div>
                        <button class="button is-primary is-fullwidth m-t-30">Register</button>                    
                    </form>
                </div><!-- end of .card-content -->            
            </div><!-- end of .card -->
            <h5 class="has-text-centered m-t-20"><a class="is-muted" href="{{route('login')}}">Already have an account?</a></h5>
        </div>
    </div>

@endsection
