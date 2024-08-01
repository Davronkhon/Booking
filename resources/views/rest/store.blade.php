@extends('layouts.app')

<<<<<<< HEAD
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create New Item</div>

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

                        <form action="{{ route('rest.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea class="form-control" name="description" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
=======
@section('title')
>>>>>>> 0bfbe1554d6e061a4edba81280d3c4dc09e368bc
@endsection

@section('content')
    @if(session('message'))
        <div class="alert alert-danger">
            {{session('message')}}
        </div>
    @elseif(session('message2'))
        <div class="alert alert-info">
            {{session('message2')}}
        </div>
    @endif
    <a href="{{route('rest.create')}}" class="btn btn-primary">Добавить</a>
    <table class="table">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Description</th>
            <th>Удалить</th>
            <th>Изменить</th>
        </tr>
        @foreach($rests as $rest)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$rest->name}}</td>
                <td>{{$rest->description}}</td>
                <td>
                    <form action="{{route('rest.destroy', $rest->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Удалить" class="btn btn-danger">
                    </form>
                </td>
                <td>
                    <form action="{{route('rest.edit', $rest->id)}}" method="get">
                        @csrf
                        <input type="submit" value="Изменить" class="btn btn-info">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
@section('footer')
@endsection
