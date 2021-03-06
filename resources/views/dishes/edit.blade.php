@extends('layouts.master1')
@section('content')
    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                @lang('messages.form-update-dish')
            </div>
            <div class="card-body">
                <form method="post" action="{{route('dishes.update', $dish->id)}}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label>@lang('messages.dish-name')</label>
                        <input type="text" name="name" value="{{$dish->name}}" class="form-control" placeholder="@lang('messages.dish-name')">
                    </div>
                    @if($errors->has('name'))
                        <p class="text-danger">{{$errors->first('name')}}</p>
                    @endif
                    <div class="form-group">
                        <label>@lang('messages.dish-price')</label>
                        <input type="text" name="price" value="{{$dish->price}}" class="form-control" placeholder="@lang('messages.dish-price')">
                    </div>
                    @if($errors->has('price'))
                        <p class="text-danger">{{$errors->first('price')}}</p>
                    @endif
                    <div class="form-group">
                        <label>@lang('messages.dish-image')</label>
                        <input type="file" name="image" class="form-control-file">
                    </div>
                    <button type="submit" class="btn btn-primary">@lang('messages.update')</button>
                </form>
            </div>
        </div>
@endsection
