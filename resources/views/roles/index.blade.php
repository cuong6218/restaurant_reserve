@extends('layouts.master1')
@section('content')
    <div class="container-fluid">
            <main>
                    <h1 class="mt-4"> @lang('messages.role-list')</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active"> @lang('messages.role-list')</li>
                    </ol>
                    <div class="btn btn-outline-success mt-3 mb-3">
                        <a href="{{route('roles.create')}}">@lang('messages.role-add')</a>
                    </div>
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
                                        <th>@lang('messages.role-name')</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($roles as $key => $role)
                                        <tr>
                                            <td>{{$key + 1}}</td>
                                            <td>{{$role->name}}</td>
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
            </main>
    </div>
@endsection
