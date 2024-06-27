@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Clients</h1>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Phone</th>
                        <th>User ID</th>
                        <th>Restaurant ID</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($clients as $client)
                        <tr>
                            <td>{{ $client->name }}</td>
                            <td>{{ $client->surname }}</td>
                            <td>{{ $client->phone }}</td>
                            <td>{{ $client->user_id }}</td>
                            <td>{{ $client->restaurant_id }}</td>
                            <td>
                                <a href="{{ route('client.show', $client->id) }}" class="btn btn-primary btn-sm">Show</a>
                                <a href="{{ route('client.edit', $client->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('client.destroy', $client->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this client?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <a href="{{ route('client.create') }}" class="btn btn-success">Create Client</a>
            </div>
        </div>
    </div>
@endsection
