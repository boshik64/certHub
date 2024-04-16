@extends('layouts.main')
@section('head')
    <title>{{$cinema->cinema_name}}</title>
@endsection
@section('content')
    <div>
        <form action="{{route('cinemas.index')}}" method="get">
            <input type="submit" value="Назад">
        </form>
    </div>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Cinema name</th>
            <th>Country name</th>
            <th>City name</th>
            <th>Subject name</th>
            <th>Company title</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <td>{{$cinema->id}}</td>
            <td>{{$cinema->cinema_name}}</td>
            <td>{{$cinema->country_name}}</td>
            <td>{{$cinema->city_name}}</td>
            <td>{{$cinema->subject_name}}</td>
            <td>{{$cinema->company_title->title}}</td>
            <td>
                <div>
                    <form action="{{route('cinemas.edit',$cinema->id)}}" method="get">
                        <input type="submit" value="Редактировать">
                    </form>
                </div>
            </td>

        </tr>
        </tfoot>
    </table>
@endsection

