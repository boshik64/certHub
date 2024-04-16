@extends('layouts.main')
@section('head')
    <title>Кинотеатры</title>
@endsection
@section('content')
    <div>
        <form action="{{route('cinemas.index')}}" method="get">
            <input type="submit" value="Назад">
        </form>
    </div>
    <div>
        <form action="{{route('cinemas.store')}}" method="post">
            @csrf
            <div>
                <label for="cinema_name">Название кинотеатра</label>
                <input type="text" id="cinema_name" name="cinema_name">
            </div>

            <div>
                <label for="company_title">Наименование юрлица</label>
                <select id="company_title" name="company_title_id">
                    @foreach($company_titles as $company_title)
                        <option value="{{$company_title->id}}">{{$company_title->title}}</option>
                    @endforeach
                </select>
            </div>
            {{--            <div>--}}
            {{--                <label for="company_title_id">Наименование юрлица</label>--}}
            {{--                <input type="number" id="company_title_id" name="company_title_id">--}}
            {{--            </div>--}}
            <button type="submit">Создать</button>
        </form>
    </div>
@endsection

