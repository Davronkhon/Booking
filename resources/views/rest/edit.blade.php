@extends('layouts.app')

@section('content')
<<<<<<< HEAD
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('rest.update', $rest->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $rest->name) }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                                <div class="col-md-6">
                                    <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" required autocomplete="description">{{ old('description', $rest->description) }}</textarea>

                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
=======
    <div class="card-body">
        @if(session('message'))
            <div class="alert alert-success">
                {{session('message')}}
>>>>>>> 0bfbe1554d6e061a4edba81280d3c4dc09e368bc
            </div>
        @endif
        <form action="{{route('rest.update', $rest->id) }}" method="post">
            @csrf
            @method('PUT')
            <label for="">Name</label>
            <input type="text" class="form-control" id="" name="name" value="{{$rest->name}}">
            <label for="">Description</label>
            <input type="text" class="form-control" id="" name="description" value="{{$rest->description}}">
            <input type="submit" value="Изменить" class="btn btn-primary form-control">
        </form>
    </div>
@endsection
