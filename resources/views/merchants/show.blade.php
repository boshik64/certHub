@extends('layouts.main')
@section('head')
    <title>{{$merchant->mid}}</title>
@endsection
@section('content')
    <div>
        <form action="{{route('merchants.index',$merchant->id)}}" method="get">
            <input type="submit" value="Назад">
        </form>
    </div>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Cinema id</th>
            <th>MID</th>
            <th>Merchant type</th>
            <th>Workstation</th>
            <th>Department name</th>
            <th>Next update</th>
            <th>Last update</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <td>{{$merchant->id}}</td>
            <td>{{$merchant->cinema->cinema_name}}</td>
            <td>{{$merchant->mid}}</td>
            <td>{{$merchant->merchant_type}}</td>
            <td>{{$merchant->workstation}}</td>
            <td>{{$merchant->department_name}}</td>
            <td>{{$merchant->next_update}}</td>
            <td>{{$merchant->updated_at}}</td>
            <td>
                <form action="{{route('merchants.edit',$merchant->id)}}" method="get">
                    <input type="submit" value="Редактировать">
                </form>
            </td>


        </tr>
        </tfoot>
    </table>
@endsection

