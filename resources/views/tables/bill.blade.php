@extends('layouts.master1')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Form bill table {{$table->name}}
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <strong>@lang('messages.dish-list')</strong>
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>@lang('messages.dish-name')</th>
                        <th>@lang('messages.dish-price')</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($table->dishes as $key => $dish)
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
                    <tr>
                        <td>Total:</td>
                        <td>$ 0</td>
                    </tr>
                    </tbody>
                </table>
                <a href="{{route('tables.pay', $table->id)}}" class="btn btn-success">Pay</a>
            </div>
        </div>
    </div>
    </div>
@endsection
