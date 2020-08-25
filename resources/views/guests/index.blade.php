@extends('layouts.master1')
@section('content')
    <div class="container-fluid">
            <main>
                    <h1 class="mt-4"> @lang('messages.guest-list')</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active"> @lang('messages.guest-list')</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
{{--                            <i class="fas fa-table mr-1"></i>--}}
                            <button class="btn btn-primary dropdown-toggle mr-4" type="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">Show / Hide</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item">
                                    <!-- Default unchecked -->
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="checkbox1" checked>
                                        <label id="show-hide-phone" class="custom-control-label" for="checkbox1">Phone</label>
                                    </div>
                                </a>
                                <a class="dropdown-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="checkbox2" checked>
                                        <label id="show-hide-note" class="custom-control-label" for="checkbox2">Note</label>
                                    </div>
                                </a>
                                <a class="dropdown-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="checkbox3" checked>
                                        <label id="show-hide-number" class="custom-control-label" for="checkbox3">Guest number</label>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="checkbox4" checked>
                                        <label id="show-hide-all" class="custom-control-label" for="checkbox4">All</label>
                                    </div>
                                </a>
                            </div>
                            <!-- Basic dropdown -->





                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped text-center" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th id="guest-name">@lang('messages.guest-name')</th>
                                        <th class="phone">@lang('messages.guest-phone')</th>
                                        <th class="note">@lang('messages.guest-note')</th>
                                        <th class="guest_number">@lang('messages.guest-number')</th>
                                        <th>@lang('messages.booking-date')</th>
                                        <th>@lang('messages.time_start')</th>
                                        <th>@lang('messages.time_end')</th>
                                        <th>@lang('messages.status')</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($guests as $key => $guest)
                                        <tr>
                                            <td>{{$key + 1}}</td>
                                            <td>{{$guest->name}}</td>
                                            <td class="phone">{{$guest->phone}}</td>
                                            <td class="note">
                                                @if(!$guest->note)
                                                    <p class="text-danger">No note</p>
                                                    @else
                                                {{$guest->note}}
                                                    @endif
                                            </td>
                                            <td class="guest_number">{{$guest->guest_number}}</td>
                                            <td>{{$guest->booking_date}}</td>
                                            <td>{{$guest->time_start}}</td>
                                            <td>{{$guest->time_end}}</td>
                                            <td>
                                                @if(!$guest->deleted_at)
                                                    <p class="text-success">booking</p>
                                                @else
                                                <p class="text-danger">canceled </p>
                                                @endif
                                            </td>
                                            <td><a class="btn btn-info" href="{{route('guests.edit', $guest->id)}}">@lang('messages.update')</a> </td>
                                            {{--                            <td><a class="btn btn-danger" href="{{route('guests.destroy', $guest->id)}}">@lang('messages.cancel')</a> </td>--}}
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="10">@lang('messages.no-data')</td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                                {{$guests->links()}}
                            </div>
                        </div>
                    </div>
            </main>
    </div>
@endsection
