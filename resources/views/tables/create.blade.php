@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Form add table
            </div>
            <div class="card-body">
                <form method="post" action="{{route('tables.store')}}">
                @csrf
                <div class="form-group">
                    <label>Table name</label>
                    <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="table name">
                </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
    </div>
@endsection
