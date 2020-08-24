@extends('layouts.master1')
@section('content')
    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                @lang('messages.form-add-role')
            </div>
            <div class="card-body">
                <form method="post" action="{{route('roles.store')}}">
                    @csrf
                    <div class="form-group">
                        <label>@lang('messages.role-name')</label>
                        <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="@lang('messages.role-name')">
                    </div>
                    @if($errors->has('name'))
                        <p class="text-danger">{{$errors->first('name')}}</p>
                    @endif
                    <button type="submit" class="btn btn-primary">@lang('messages.role-add')</button>
                </form>
            </div>
        </div>
@endsection
