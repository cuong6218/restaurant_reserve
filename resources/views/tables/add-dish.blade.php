@extends('layouts.master1')
@section('content')
    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                @lang('messages.form-add-dish')
            </div>
            <div class="card-body">
                <form method="post" action="{{route('tables.addDish', $table->id)}}">
                    @csrf
                    <div class="form-group">
                        <label>Dishes select</label>
                        @foreach($dishes as $dish)
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="dish[{{$dish->id}}]"
                                           value="{{ $dish->id }}"> {{ $dish->name }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                    <button type="submit" class="btn btn-primary">@lang('messages.dish-add')</button>
                </form>
            </div>
        </div>
@endsection
