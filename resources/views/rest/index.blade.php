@extends('layouts.app')

@section('content')
    <h1>Rests</h1>

    <a href="{{ route('rest.create') }}" class="btn btn-primary">Create Rest</a>

    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
        @foreach($rests as $rest)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{ $rest->name }}</td>
                <td>{{ $rest->description }}</td>
                <td>
                    <a href="{{ route('rest.edit', $rest->id) }}" class="btn btn-primary">Edit</a>

                    <form action="{{ route('rest.destroy', $rest->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
