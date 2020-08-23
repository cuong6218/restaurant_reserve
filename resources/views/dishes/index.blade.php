@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="btn btn-outline-success mt-3 mb-3">
            <a href="{{route('dishes.create')}}">@lang('messages.dish-add')</a>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                @lang('messages.dish-list')
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>@lang('messages.dish-name')</th>
                        <th>@lang('messages.dish-price')</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($dishes as $key => $dish)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$dish->name}}</td>
                            <td>$ {{$dish->price}}</td>
                        </tr>
                    @empty
                        <tr>
                            <td>@lang('messages.no-data')</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                {{$dishes->links()}}
            </div>
        </div>
    </div>
    </div>
@endsection
