<!-- resources/views/places/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Places List
                        <a href="{{ route('places.create') }}" class="btn btn-primary btn-sm float-right">Create New Place</a>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Number</th>
                                <th>Description</th>
                                <th>Capacity</th>
                                <th>Restaurant ID</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($places as $place)
                                <tr>
                                    <td>{{ $place->name }}</td>
                                    <td>{{ $place->number }}</td>
                                    <td>{{ $place->description }}</td>
                                    <td>{{ $place->capacity }}</td>
                                    <td>{{ $place->restaurant_id }}</td>
                                    <td>
                                        <a href="{{ route('places.show', $place->id) }}" class="btn btn-info btn-sm">View</a>
                                        <a href="{{ route('places.edit', $place->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('places.destroy', $place->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
