@extends('layouts.master1')
@section('content')
<div class="container-fluid">
        <a href="{{route('guests.create', $table->id)}}" class="btn btn-success">Booking</a>
        <div class="card">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Detail table {{$table->name}}
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <strong>@lang('messages.dish-list')</strong>
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>@lang('messages.dish-name')</th>
                        <th>@lang('messages.dish-price')</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($table->dishes as $key => $dish)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$dish->name}}</td>
                            <td>$ {{$dish->price}}</td>
                        </tr>
                    @empty
                        <tr>
                            <td>@lang('messages.no-data')</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                <table class="table table-striped">
                    <strong>@lang('messages.guest-booking')</strong>
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>@lang('messages.guest-name')</th>
                        <th>@lang('messages.guest-phone')</th>
                        <th>@lang('messages.guest-number')</th>
                        <th>@lang('messages.booking-date')</th>
                        <th>@lang('messages.time_start')</th>
                        <th>@lang('messages.time_end')</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($table->guests as $key => $guest)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$guest->name}}</td>
                            <td>{{$guest->phone}}</td>
                            <td>{{$guest->guest_number}}</td>
                            <td>{{$guest->booking_date}}</td>
                            <td>{{$guest->time_start}}</td>
                            <td>{{$guest->time_end}}</td>
                            <td><a href="{{route('guests.destroy',[$guest->id, $table->id])}}" class="btn btn-danger">@lang('messages.cancel')</a> </td>
                        </tr>
                    @empty
                        <tr>
                            <td>@lang('messages.no-data')</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
