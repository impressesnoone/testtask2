@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Добавление авто</h1>
    <a class="btn btn-primary" href="{{ route('home') }}">На главную</a>
    <a class="btn btn-primary" href="{{ route('auto.index') }}">Вернуться</a>
    <div class="row justify-content-center">
        <form action="{{ route('auto.store') }}" method="post">
            @csrf
        <div class="input-group flex-nowrap mb-3 mt-3 w-50">
            <span class="input-group-text " id="addon-wrapping">Марка</span>
            <input type="text" name="brand" class="form-control" placeholder="Введите марку"  aria-describedby="addon-wrapping">
        </div>
        <div class="input-group flex-nowrap mb-3 w-50">
            <span class="input-group-text" id="addon-wrapping">Модель</span>
            <input type="text" name="model" class="form-control w-25" placeholder="Введите модель"  aria-describedby="addon-wrapping">
        </div>
            <button type="submit" class="btn btn-primary">Добавить</button>
        </form>
    </div>
</div>
@endsection
