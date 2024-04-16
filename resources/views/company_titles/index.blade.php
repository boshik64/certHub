@extends('layouts.main')
@section('head')
    <title>Юр.лица</title>
@endsection
@section('content')
    <div>
        <form action="{{route('company_titles.create')}}" method="get">
            <input type="submit" value="Добавить юр.лицо">
        </form>
    </div>

    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Company title</th>
        </tr>
        </thead>
        <tfoot>
        @foreach($company_titles as $company_title)
            <tr>
                <td>{{$company_title->id}}</td>
                <td>{{$company_title->title}}</td>
                <td>
                    <form action="{{route('company_titles.show',$company_title->id)}}" method="get">
                        <input type="submit" value="Редактировать">
                    </form>
                </td>
                <td>
                    <form action="{{route('company_titles.destroy',$company_title->id)}}" method="post">
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

