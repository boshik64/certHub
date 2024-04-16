@extends('layouts.main')
@section('head')
    <title>{{$company_title->title}}</title>
@endsection
@section('content')
    <div>
        <form action="{{route('company_titles.index')}}" method="get">
            <input type="submit" value="Назад">
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
        <tr>
            <td>{{$company_title->id}}</td>
            <td>{{$company_title->title}}</td>
            <td>
                <div>
                    <form action="{{route('company_titles.edit',$company_title->id)}}" method="get">
                        <input type="submit" value="Редактировать">
                    </form>
                </div>
            </td>

        </tr>
        </tfoot>
    </table>
@endsection

