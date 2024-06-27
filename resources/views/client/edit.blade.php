<!-- resources/views/client/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Edit Client
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('client.update', $clients->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $clients->name }}">
                            </div>
                            <div class="form-group">
                                <label for="surname">Surname:</label>
                                <input type="text" class="form-control" id="surname" name="surname" value="{{ $clients->surname }}">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone:</label>
                                <input type="text" class="form-control" id="phone" name="phone" value="{{ $clients->phone }}">
                            </div>
                            <div class="form-group">
                                <label for="user_id">User ID:</label>
                                <input type="text" class="form-control" id="user_id" name="user_id" value="{{ $clients->user_id }}">
                            </div>
                            <div class="form-group">
                                <label for="restaurant_id">Restaurant ID:</label>
                                <input type="text" class="form-control" id="restaurant_id" name="restaurant_id" value="{{ $clients->restaurant_id }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
