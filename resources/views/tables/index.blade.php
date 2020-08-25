@extends('layouts.master1')
@section('content')
    <div class="container-fluid">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4"> @lang('messages.table-list')</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active"> @lang('messages.table-list')</li>
                </ol>
                <div class="btn btn-outline-success mt-3 mb-3">
                    <a href="{{route('tables.create')}}">@lang('messages.table-add')</a>
                </div>
                <div class="card mb-4">

                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Table
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped text-center" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>@lang('messages.table-name')</th>
                                    <th>@lang('messages.status')</th>
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
        </main>
    </div>
    </div>
    </div>
@endsection

