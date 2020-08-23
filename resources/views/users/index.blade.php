@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="card mb-4 mt-3">
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
@endsection
