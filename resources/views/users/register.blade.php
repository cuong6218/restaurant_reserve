

<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/css/register.css">
    <title>Bootstrap 4 Login/Register Form</title>
</head>
<body>
@extends('layouts.base')
<div id="logreg-forms">
    <form class="form-signin" method="post" action="{{route('users.store')}}">
        @csrf
        <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> @lang('messages.form-register')</h1>
        <input type="text" name="name" value="{{old('name')}}" class="form-control mb-3" placeholder="@lang('messages.user-name')" >
        @if($errors->has('name'))
            <p class="text-danger">{{$errors->first('name')}}</p>
        @endif
        <input type="password" name="password" value="{{old('password')}}" id="inputPassword" class="form-control mb-3" placeholder="@lang('messages.user-password')">
        @if($errors->has('password'))
            <p class="text-danger">{{$errors->first('name')}}</p>
        @endif
        <input type="text" name="email" value="{{old('email')}}" id="inputEmail" class="form-control mb-3" placeholder="@lang('messages.user-email')">
        @if($errors->has('email'))
            <p class="text-danger">{{$errors->first('email')}}</p>
        @endif
        <button class="btn btn-success btn-block" type="submit"><i class="fas fa-user-plus"></i>  @lang('messages.user-register')</button>
        <hr>
        <!-- <p>Don't have an account!</p>  -->
        <a href="{{route('auth.showLogin')}}" class="btn btn-primary text-light" type="button" id="btn-signup"><i class="fas fa-sign-in-alt"></i> Sign in instead</a>
    </form>
    <br>

</div>
<p style="text-align:center">
    <a href="http://bit.ly/2RjWFMfunction toggleResetPswd(e){
    e.preventDefault();
    $('#logreg-forms .form-signin').toggle() // display:block or none
    $('#logreg-forms .form-reset').toggle() // display:block or none
}

function toggleSignUp(e){
    e.preventDefault();
    $('#logreg-forms .form-signin').toggle(); // display:block or none
    $('#logreg-forms .form-signup').toggle(); // display:block or none
}

$(()=>{
    // Login Register Form
    $('#logreg-forms #forgot_pswd').click(toggleResetPswd);
    $('#logreg-forms #cancel_reset').click(toggleResetPswd);
    $('#logreg-forms #btn-signup').click(toggleSignUp);
    $('#logreg-forms #cancel_signup').click(toggleSignUp);
})g" target="_blank" style="color:black">By Kirby</a>
</p>

<script src="/js/register.js"></script>
</body>
</html>
