@extends('layouts.main')
@section('head')
    <title>Юр. лица</title>
@endsection
@section('content')
    <div>
        <form action="{{route('company_titles.index')}}" method="get">
            <input type="submit" value="Назад">
        </form>
    </div>
    <div>
        <form action="{{route('company_titles.store')}}" method="post">
            @csrf
            <div>
                <label for="title">Наименование юрлица</label>
                <input type="text" id="title" name="title">
            </div>
            <button type="submit">Создать</button>
        </form>
    </div>
@endsection

