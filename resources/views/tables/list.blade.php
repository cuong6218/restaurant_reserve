@extends('layouts.master')
@section('content')
    <div class="container">
        <a href="{{route('tables.list')}}" class="btn btn-info">List all</a>
        <a href="{{route('tables.showBooking')}}" class="btn btn-success">Booking</a>
        <a href="{{route('tables.showSeated')}}" class="btn btn-primary">Seated</a>
        <a href="{{route('tables.showEmpty')}}" class="btn btn-secondary">Empty</a>
        <div class="card mb-4  mt-3">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>

                @lang('messages.table-list')
            </div>
            <div class="card-body">
                @forelse($tables as $table)
                    <div class="col-sm-6 col-lg-3 mb-3 float-left">
                        <div class="card ">
                            <div class="card-body bg-light">
                                <div class="text-value-lg"><i class="cil-dinner" style="font-size: 20px"></i>@lang('messages.table'): {{$table->name}}</a></div>
                                <div>{{$table->status}}</div>
                                <div class="progress progress-xs my-2">

                                </div>
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-light active">
                                        <span class="text-muted"><a href="{{route('tables.seated', $table->id)}}"><i class='fas fa-utensils' style='font-size:24px'></i></a> </span>
                                    </label>
                                    <label class="btn btn-info">
                                       <span class="text-muted"><a href="{{route('tables.empty', $table->id)}}"><i class='fas fa-frown' style='font-size:24px'></i></a></span>
                                    </label>
                                    <label class="btn btn-success">
                                        <span class="text-muted"><a href="{{route('guests.create', $table->id)}}"><i class='fas fa-paper-plane' style='font-size:24px'></i></a></span>
                                    </label>
                                    <label class="btn btn-warning">
                                        <span class="text-muted"><a href="#"><i class='fab fa-btc' style='font-size:24px'></i></a></span>
                                    </label>
                                </div>
{{--                                <span class="text-muted"><a href="{{route('tables.seated', $table->id)}}">Seated |</a> </span>--}}
{{--                                <span class="text-muted"><a href="{{route('tables.empty', $table->id)}}">Empty</a> </span>--}}
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
