@extends('layouts.main')
@section('head')
    <title>{{$cinema->cinema_name}}</title>
@endsection
@section('content')
    <div>
        <form action="{{route('cinemas.show',$cinema->id)}}" method="get">
            <input type="submit" value="Назад">
        </form>
    </div>
    <div>
        <form action="{{route('cinemas.update',$cinema->id)}}" method="post">
            @csrf
            @method('patch')
            <div>
                <label for="cinema_name">Название кинотеатра</label>
                <input type="text" id="cinema_name" name="cinema_name" value="{{$cinema->cinema_name}}">
            </div>
            <div>
                <label for="company_title">Наименование юрлица</label>
                <select id="company_title" name="company_title_id">
                    @foreach($company_titles as $company_title)
                        <option
                                {{$company_title->id == $cinema->company_title_id?' selected' : ''}}
                                value="{{$cinema->company_title_id}}">{{$company_title->title}}</option>
                    @endforeach
                </select>
            </div>

            {{--            <div>--}}
            {{--                <label for="company_title_id">Наименование юрлица</label>--}}
            {{--                <input type="text" id="company_title_id" name="company_title_id" value="{{$cinema->company_title}}">--}}
            {{--            </div>--}}
            <button type="submit">Обновить</button>
        </form>
    </div>
@endsection

