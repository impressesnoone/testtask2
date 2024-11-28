@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Список моих авто</h1>
    <a class="btn btn-primary" href="{{ route('auto.index') }}">Добавить Авто</a>
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
                    <td>
                        <form action="{{ route('auto.destroy', $auto->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
