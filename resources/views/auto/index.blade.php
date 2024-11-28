@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Список всех авто</h1>
    <a class="btn btn-primary" href="{{ route('home') }}">На главную</a>
    <a class="btn btn-primary" href="{{ route('auto.create') }}">Моего авто нет в списке</a>
    <div class="row justify-content-center">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Марка</th>
                <th scope="col">Модель</th>
                <th scope="col">Действие</th>
            </tr>
            </thead>
            <tbody>
            @foreach($autos as $auto)
            <tr>
                <th scope="row">{{ $auto->id }}</th>
                <td>{{ $auto->brand }}</td>
                <td>{{ $auto->model }}</td>
                <td><a class="btn btn-success" href="{{ route('add_auto', $auto->id) }}">Добавить</a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
