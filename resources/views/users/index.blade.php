@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="btn btn-outline-success mt-3 mb-3">
            <a href="{{route('users.create')}}">@lang('messages.user-register')</a>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                @lang('messages.user-list')
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>@lang('messages.user-name')</th>
                        <th>@lang('messages.user-email')</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($users as $key => $user)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                        </tr>
                    @empty
                        <tr>
                            <td>@lang('messages.no-data')</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                {{$users->links()}}
            </div>
        </div>
    </div>
    </div>
@endsection
