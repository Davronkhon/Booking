@extends('layouts.app')

@section('title')
@endsection

@section('content')
    <h1>Список распоряжений</h1>

    @if(session('message'))
        <div class="alert alert-danger">
            {{session('message')}}
        </div>
    @elseif(session('message2'))
        <div class="alert alert-info">
            {{session('message2')}}
        </div>
    @endif
    <a href="{{route('order.create')}}" class="btn btn-primary">Добавить</a>
    <table class="table">
        <tr>
            <th>#</th>
            <th>Качество</th>
            <th>Дата распорежения</th>
            <th>Статус</th>
            <th>Бронирование</th>
            <th>Блюдо</th>
            <th>Клиент</th>
            <th>Удалить</th>
            <th>Изменить</th>
        </tr>
        @foreach($orders as $order)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$order->quantity}}</td>
                <td>{{$order->orderdat}}</td>
                <td>{{$order->status}}</td>
                <td>{{$order->booking->name}}</td>
                <td>{{$order->food->name}}</td>
                <td>{{$order->client->name}}</td>
                <td>
                    <form action="{{route('order.destroy', $order->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Удалить" class="btn btn-danger">
                    </form>
                </td>
                <td>
                    <form action="{{route('order.edit', $order->id)}}" method="get">
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
