@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                @lang('messages.form-booking')
            </div>
            <div class="card-body">
                <form method="post" action="{{route('guests.store')}}">
                    @csrf
                    <div class="form-group">
                        <label>@lang('messages.guest-name')</label>
                        <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="@lang('messages.guest-name')">
                    </div>
                    @if($errors->has('name'))
                        <p class="text-danger">{{$errors->first('name')}}</p>
                    @endif
                    <div class="form-group">
                        <label>@lang('messages.guest-phone')</label>
                        <input type="text" name="phone" value="{{old('phone')}}" class="form-control" placeholder="@lang('messages.guest-phone')">
                    </div>
                    @if($errors->has('phone'))
                        <p class="text-danger">{{$errors->first('phone')}}</p>
                    @endif
                    <div class="form-group">
                        <label>@lang('messages.guest-note')</label>
                        <input type="text" name="note" value="{{old('note')}}" class="form-control" placeholder="@lang('messages.guest-note')">
                    </div>
                    @if($errors->has('note'))
                        <p class="text-danger">{{$errors->first('note')}}</p>
                    @endif
                    <div class="form-group">
                        <label>@lang('messages.guest-number')</label>
                        <input type="text" name="guest_number" value="{{old('guest_number')}}" class="form-control" placeholder="@lang('messages.guest-number')">
                    </div>
                    @if($errors->has('guest_number'))
                        <p class="text-danger">{{$errors->first('guest_number')}}</p>
                    @endif
                    <div class="form-group">
                        <label>@lang('messages.booking-date')</label>
                        <input type="datetime-local" name="booking_date" value="{{old('booking_date')}}" class="form-control"">
                    </div>
                    @if($errors->has('booking_date'))
                        <p class="text-danger">{{$errors->first('booking_date')}}</p>
                    @endif
                    <button type="submit" class="btn btn-primary">@lang('messages.table-booking')</button>
                </form>
            </div>
        </div>
@endsection
