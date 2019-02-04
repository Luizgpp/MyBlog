@extends('layouts.app')

@section('content')

@if (session('status'))
    <div class="notification is-success">
        {{session('status')}}
    </div>    
@endif

<div class="columns">
        <div class="column is-one-third is-offset-one-third">
            <div class="card m-t-75">
                <div class="card-content">
                    <h1 class="title">Forgot Password</h1>
                    <form action="{{route('password.email')}}" method="POST" role="form">
                        {{ csrf_field() }}
      
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
                        <button class="button is-primary is-fullwidth m-t-30">Get Reset Password</button>                    
                    </form>
                </div><!-- end of .card-content -->            
            </div><!-- end of .card -->
            <h5 class="has-text-centered m-t-20">           
                <a class="is-muted" href="{{route('login')}}"> 
                    <b-icon pack="fa" icon="caret-left" size="is-small"></b-icon>                    
                    Back to login
                </a>
            </h5>
        </div>
    </div>

@endsection
