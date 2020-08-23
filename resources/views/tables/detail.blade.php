@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Detail table {{$table->name}}
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>@lang('messages.guest-name')</th>
                        <th>@lang('messages.guest-phone')</th>
                        <th>@lang('messages.guest-note')</th>
                        <th>@lang('messages.guest-number')</th>
                        <th>@lang('messages.booking-date')</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($table->guests as $key => $guest)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$guest->name}}</td>
                            <td>{{$guest->phone}}</td>
                            <td>{{$guest->note}}</td>
                            <td>{{$guest->guest_number}}</td>
                            <td>{{$guest->booking_date}}</td>
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
