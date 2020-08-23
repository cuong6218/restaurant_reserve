@extends('layouts.master')
@section('content')
    <div class="container">
        <a href="{{route('tables.create')}}">Add table</a>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                List table
            </div>
{{--            class="table-responsive"--}}
{{--            id="dataTable" width="100%" cellspacing="0"--}}
            <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($tables as $key => $table)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>Table: {{$table->name}}</td>
                                <td>{{$table->status}}</td>
                            </tr>
                        @empty
                            <tr>
                                <td>No data</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                    {{$tables->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
