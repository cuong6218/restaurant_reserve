@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                @lang('messages.form-add-table')
            </div>
            <div class="card-body">
                <form method="post" action="{{route('tables.store')}}">
                @csrf
                <div class="form-group">
                    <label>@lang('messages.table-name')</label>
                    <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="@lang('messages.table-name')">
                </div>
                    @if($errors->has('name'))
                        <p class="text-danger">{{$errors->first('name')}}</p>
                    @endif
                    <button type="submit" class="btn btn-primary">@lang('messages.table-add')</button>
                </form>
            </div>
    </div>
@endsection
