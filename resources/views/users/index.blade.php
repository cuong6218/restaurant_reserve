@extends('layouts.master1')
@section('content')
    <div class="container-fluid">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4"> @lang('messages.user-list')</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active"> @lang('messages.user-list')</li>
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
                                    <th>@lang('messages.user-name')</th>
                                    <th>@lang('messages.user-email')</th>
                                    <th colspan="2"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($users as $key => $user)
                                    <tr>
                                        <td>{{$key + 1}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td><a href="{{route('users.edit', $user->id)}}" class="btn btn-primary">@lang('messages.update')</a> </td>
                                        <td>
                                            <form method="post" action="{{route('users.destroy', $user->id)}}">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button type="submit" class="btn btn-danger"><span data-feather="trash-2"></span>&nbsp;@lang('messages.delete')</button>
                                            </form>
                                        </td>
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
        </main>
    </div>
    </div>
    </div>
@endsection









{{--@section('content')--}}
{{--    <div id="layoutSidenav_content">--}}
{{--        <main>--}}
{{--            <div class="container-fluid">--}}
{{--                <h1 class="mt-4"> @lang('messages.user-list')</h1>--}}
{{--                <ol class="breadcrumb mb-4">--}}
{{--                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>--}}
{{--                    <li class="breadcrumb-item active"> @lang('messages.user-list')</li>--}}
{{--                </ol>--}}
{{--                <div class="card mb-4">--}}
{{--                    <div class="card-header">--}}
{{--                        <i class="fas fa-table mr-1"></i>--}}
{{--                        Table--}}
{{--                    </div>--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="table-responsive">--}}
{{--                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">--}}
{{--                                <thead>--}}
{{--                                <tr>--}}
{{--                                    <th>#</th>--}}
{{--                                    <th>@lang('messages.user-name')</th>--}}
{{--                                    <th>@lang('messages.user-email')</th>--}}
{{--                                    <th colspan="2"></th>--}}
{{--                                </tr>--}}
{{--                                </thead>--}}
{{--                                <tbody>--}}
{{--                                @forelse($users as $key => $user)--}}
{{--                                    <tr>--}}
{{--                                        <td>{{$key + 1}}</td>--}}
{{--                                        <td>{{$user->name}}</td>--}}
{{--                                        <td>{{$user->email}}</td>--}}
{{--                                        <td><a href="{{route('users.edit', $user->id)}}" class="btn btn-primary">@lang('messages.update')</a> </td>--}}
{{--                                        <td>--}}
{{--                                            <form method="post" action="{{route('users.destroy', $user->id)}}">--}}
{{--                                                @csrf--}}
{{--                                                <input type="hidden" name="_method" value="DELETE">--}}
{{--                                                <button type="submit" class="btn btn-danger"><span data-feather="trash-2"></span>&nbsp;@lang('messages.delete')</button>--}}
{{--                                            </form>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                @empty--}}
{{--                                    <tr>--}}
{{--                                        <td>@lang('messages.no-data')</td>--}}
{{--                                    </tr>--}}
{{--                                @endforelse--}}
{{--                                </tbody>--}}
{{--                            </table>--}}
{{--                            {{$users->links()}}--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </main>--}}

{{--    </div>--}}
{{--    </div>--}}
{{--@endsection--}}
