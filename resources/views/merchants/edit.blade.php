@extends('layouts.main')
@section('head')
    <title>{{$merchant->mid}}</title>
@endsection
@section('content')
    <div>
        <form action="{{route('merchants.show',$merchant->id)}}" method="get">
            <input type="submit" value="Назад">
        </form>
    </div>
    <div>
        <form action="{{route('merchants.update',$merchant->id)}}" method="post">
            @csrf
            @method('patch')
            <div>
                <label for="cinema_id">Cinema id</label>
                <select id="cinema_id" name="cinema_id">
                    @foreach($cinemas as $cinema)
                        <option
                                {{$cinema->id == $merchant->cinema_id?' selected' : ''}}
                                value="{{$merchant->cinema_id}}">{{$cinema->cinema_name}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="MID">MID</label>
                <input type="number" id="MID" name="MID" value="{{$merchant->mid}}">
            </div>
            <div>
                <label for="merchant_type">Merchant type</label>
                <input type="text" id="merchant_type" name="merchant_type" value="{{$merchant->merchant_type}}">
            </div>
            <div>
                <label for="workstation">Workstation</label>
                <input type="text" id="workstation" name="workstation" value="{{$merchant->workstation}}">
            </div>
            <div>
                <label for="department_name">Department name</label>
                <input type="text" id="department_name" name="department_name" value="{{$merchant->department_name}}">
            </div>
            <button type="submit">Редактировать</button>
        </form>
    </div>
@endsection

