@extends('layouts.master1')
@section('content')
    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                @lang('messages.form-update-guest')
            </div>
            <div class="card-body">
                <form method="post" action="{{route('guests.update', $guest->id)}}">
                    @csrf
                    <div class="form-group">
                        <label>@lang('messages.guest-name')</label>
                        <input type="text" name="name" value="{{$guest->name}}" class="form-control" placeholder="@lang('messages.guest-name')">
                    </div>
                    @if($errors->has('name'))
                        <p class="text-danger">{{$errors->first('name')}}</p>
                    @endif
                    <div class="form-group">
                        <label>@lang('messages.guest-phone')</label>
                        <input type="text" name="phone" value="{{$guest->phone}}" class="form-control" placeholder="@lang('messages.guest-phone')">
                    </div>
                    @if($errors->has('phone'))
                        <p class="text-danger">{{$errors->first('phone')}}</p>
                    @endif
                    <div class="form-group">
                        <label>@lang('messages.guest-note')</label>
                        <textarea name="note" class="form-control" placeholder="@lang('messages.guest-note')">{{$guest->note}}</textarea>
                    </div>
                    @if($errors->has('note'))
                        <p class="text-danger">{{$errors->first('note')}}</p>
                    @endif
                    <div class="form-group">
                        <label>@lang('messages.guest-number')</label>
                        <input type="text" name="guest_number" value="{{$guest->guest_number}}" class="form-control" placeholder="@lang('messages.guest-number')">
                    </div>
                    @if($errors->has('guest_number'))
                        <p class="text-danger">{{$errors->first('guest_number')}}</p>
                    @endif
                    <div class="form-group">
                        <label>@lang('messages.booking-date')</label>
                        <input type="datetime-local" name="booking_date" value="{{$guest->getAttributeDate($guest->booking_date)}}" class="form-control"">
                    </div>
                    @if($errors->has('booking_date'))
                        <p class="text-danger">{{$errors->first('booking_date')}}</p>
                    @endif
                    <button type="submit" class="btn btn-primary">@lang('messages.guest-update')</button>
                </form>
            </div>
        </div>
@endsection
