@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                @lang('messages.form-update-user')
            </div>
            <div class="card-body">
                <form method="post" action="{{route('users.update', $user->id)}}">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label>@lang('messages.user-name')</label>
                        <input type="text" name="name" value="{{$user->name}}" class="form-control" placeholder="@lang('messages.user-name')">
                    </div>
                    @if($errors->has('name'))
                        <p class="text-danger">{{$errors->first('name')}}</p>
                    @endif
                    <div class="form-group">
                        <label>@lang('messages.user-email')</label>
                        <input type="text" name="email" value="{{$user->email}}" class="form-control" placeholder="@lang('messages.user-email')">
                    </div>
                    @if($errors->has('email'))
                        <p class="text-danger">{{$errors->first('email')}}</p>
                    @endif
                    <button type="submit" class="btn btn-primary">@lang('messages.update')</button>
                </form>
            </div>
        </div>
@endsection
