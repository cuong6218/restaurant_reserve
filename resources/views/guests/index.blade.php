@extends('layouts.master1')
@section('content')
    <div class="container-fluid">
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4"> @lang('messages.guest-list')</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active"> @lang('messages.guest-list')</li>
                    </ol>
                    <div class="card mb-4">

                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            Table
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>@lang('messages.guest-name')</th>
                                        <th>@lang('messages.guest-phone')</th>
                                        <th>@lang('messages.guest-note')</th>
                                        <th>@lang('messages.guest-number')</th>
                                        <th>@lang('messages.booking-date')</th>
                                        <th>@lang('messages.status')</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($guests as $key => $guest)
                                        <tr>
                                            <td>{{$key + 1}}</td>
                                            <td>{{$guest->name}}</td>
                                            <td>{{$guest->phone}}</td>
                                            <td>{{$guest->note}}</td>
                                            <td>{{$guest->guest_number}}</td>
                                            <td>{{$guest->booking_date}}</td>
                                            <td>{{$guest->status}}</td>
                                            <td><a class="btn btn-success" href="{{route('guests.edit', $guest->id)}}">@lang('messages.update')</a> </td>
                                            {{--                            <td><a class="btn btn-danger" href="{{route('guests.destroy', $guest->id)}}">@lang('messages.cancel')</a> </td>--}}
                                        </tr>
                                    @empty
                                        <tr>
                                            <td>@lang('messages.no-data')</td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                                {{$guests->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    </div>
@endsection
