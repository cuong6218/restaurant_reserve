@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="card mb-4">
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
                                </div><span class="text-muted"><a href="{{route('tables.seated', $table->id)}}">Seated |</a> </span>
                                <span class="text-muted"><a href="{{route('tables.empty', $table->id)}}">Empty</a> </span>
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
