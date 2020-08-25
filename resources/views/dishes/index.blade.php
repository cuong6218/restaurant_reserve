@extends('layouts.master1')
@section('content')
    <div class="container-fluid">
            <main>
                    <h1 class="mt-4"> @lang('messages.dish-list')</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active"> @lang('messages.dish-list')</li>
                    </ol>
                    <div class="btn btn-outline-success mt-3 mb-3">
                        <a href="{{route('dishes.create')}}">@lang('messages.dish-add')</a>
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
                                        <th>@lang('messages.dish-name')</th>
                                        <th>@lang('messages.dish-price')</th>
                                        <th>@lang('messages.dish-image')</th>
                                        <th colspan="2"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($dishes as $key => $dish)
                                        <tr>
                                            <td>{{$key + 1}}</td>
                                            <td>{{$dish->name}}</td>
                                            <td>$ {{$dish->price}}</td>
                                                <td>
{{--                                                    <img src="{{asset('storage/'.$dish->image)}}" style="width: 200px; height: 70px" alt="No image"  >--}}
                                                    <img src="{{$dish->image}}" style="width: 200px; height: 75px" alt="No image">
                                                </td>
                                            <td><a href="{{route('dishes.edit', $dish->id)}}" class="btn btn-primary">@lang('messages.update')</a> </td>
                                            <td>
                                                <form method="post" action="{{route('dishes.destroy', $dish->id)}}">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-danger"><span data-feather="trash-2"></span>&nbsp;@lang('messages.delete')</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6">@lang('messages.no-data')</td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                                {{$dishes->links()}}
                            </div>
                        </div>
                    </div>
            </main>
    </div>
@endsection
