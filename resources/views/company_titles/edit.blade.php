@extends('layouts.main')
@section('head')
    <title>{{$company_title->title}}</title>
@endsection
@section('content')
    <div>
        <form action="{{route('company_titles.show',$company_title->id)}}" method="get">
            <input type="submit" value="Назад">
        </form>
    </div>
    <div>
        <form action="{{route('company_titles.update',$company_title->id)}}" method="post">
            @csrf
            @method('patch')
            <div>
                <label for="title">Наименование юрлица</label>
                <input type="text" id="title" name="title" value="{{$company_title->title}}">
            </div>
            <button type="submit">Обновить</button>
        </form>
    </div>
@endsection

