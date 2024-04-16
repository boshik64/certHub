@extends('layouts.main')
@section('head')
    <title>Кинотеатры</title>
@endsection
@section('content')
    <div>
        <form action="{{route('cinemas.create')}}" method="get">
            <input type="submit" value="Добавить кинотеатр">
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
        @foreach($cinemas as $cinema)
            <tr>
                <td>{{$cinema->id}}</td>
                <td>{{$cinema->cinema_name}}</td>
                <td>{{$cinema->country_name}}</td>
                <td>{{$cinema->city_name}}</td>
                <td>{{$cinema->subject_name}}</td>
                <td>{{$cinema->company_title->title}}</td>
                <td>
                    <form action="{{route('cinemas.show',$cinema->id)}}" method="get">
                        <input type="submit" value="Редактировать">
                    </form>
                </td>
                <td>
                    <form action="{{route('cinemas.destroy',$cinema->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Удалить">
                    </form>
                </td>


            </tr>
        @endforeach
        </tfoot>
    </table>
@endsection

