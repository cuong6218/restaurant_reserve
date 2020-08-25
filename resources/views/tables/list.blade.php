@extends('layouts.master1')
@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">@lang('messages.table-list') 2D</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">@lang('messages.table-list') 2D</li>
        </ol>
        <div class="card mb-4  mt-3">
            <div class="card-header">
                <a href="{{route('tables.list')}}" class="btn btn-warning mr-3">List all</a>
                <a href="{{route('tables.showSeated')}}" class="btn btn-info mr-3">Seated</a>
                <a href="{{route('tables.showEmpty')}}" class="btn btn-secondary mr-3">Empty</a>
                <a href="{{route('tables.showBooking')}}" class="btn btn-success mr-3">Booking</a>
            </div>
            <div class="card-body">
                @forelse($tables as $table)
                    <div class="col-sm-6 col-lg-3 mb-3 float-left">
                        <div class="card ">
                            <div class="card-body bg-light">
                                <div class="text-value-lg">
                                        <a href="{{route('tables.show', $table->id)}}">
                                            <i class="cil-dinner" style="font-size: 20px"></i>@lang('messages.table'): {{$table->name}}</a>
                                </div>
                                <div>
                                    <p class="
                                        @switch($table->status)
                                            @case('seated')
                                                text-info
                                                @break
                                            @case('booking')
                                                text-success
                                                @break
                                            @default
                                                text-dark
                                        @endswitch
                                        ">{{$table->status}}</p>
                                </div>
                                <div class="progress progress-xs my-2">

                                </div>
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-info">
                                        <span class="text-muted"><a href="{{route('tables.seated', $table->id)}}"><i class='fas fa-utensils' style='font-size:24px; color: floralwhite'></i></a> </span>
                                    </label>
{{--                                    <label class="btn btn-secondary">--}}
{{--                                       <span class="text-muted"><a href="{{route('tables.empty', $table->id)}}" target="_blank"><i class='fas fa-frown' style='font-size:24px; color: white'></i></a></span>--}}
{{--                                    </label>--}}
                                    <label class="btn btn-warning">
                                        <span class="text-muted"><a href="{{route('tables.showBill', $table->id)}}"><i class='fab fa-btc' style='font-size:24px'></i></a></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="text-danger"><p>No data</p></div>
                @endforelse
            </div>
        </div>
    </div>
    </div>
@endsection
