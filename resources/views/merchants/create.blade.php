@extends('layouts.main')
@section('head')
    <title>Мерчанты</title>
@endsection
@section('content')
    <div><a href="{{route('merchants.index')}}">Назад</a></div>
    <div>
        <form action="{{route('merchants.store')}}" method="post">
            @csrf
            <div>
                <label for="cinema_id">Cinema id</label>
                <select id="cinema_id" name="cinema_id">
                    @foreach($cinemas as $cinema)
                        <option value="{{$cinema->id}}">{{$cinema->cinema_name}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="MID">MID</label>
                <input type="number" id="MID" name="MID">
            </div>
            <div>
                <label for="merchant_type">Merchant type</label>
                <input type="text" id="merchant_type" name="merchant_type">
            </div>
            <div>
                <label for="workstation">Workstation</label>
                <input type="text" id="workstation" name="workstation">
            </div>
            <div>
                <label for="department_name">Department name</label>
                <input type="text" id="department_name" name="department_name">
            </div>
            <button type="submit">Создать</button>
        </form>
    </div>
@endsection

