@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="btn btn-outline-success mt-3 mb-3">
            <a href="{{route('tables.create')}}">@lang('messages.table-add')</a>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                @lang('messages.table-list')
            </div>
{{--            class="table-responsive"--}}
{{--            id="dataTable" width="100%" cellspacing="0"--}}
            <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>@lang('messages.table-name')</th>
                            <th>@lang('messages.table-status')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($tables as $key => $table)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>@lang('messages.table'): {{$table->name}}</td>
                                <td>{{$table->status}}</td>
                            </tr>
                        @empty
                            <tr>
                                <td>@lang('messages.no-data')</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                    {{$tables->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
