@extends('layouts.main')
@section('head')
    <title>Мерчанты</title>
@endsection
@section('content')
    <div>
        <form action="{{route('merchants.create')}}" method="get">
            <input type="submit" value="Добавить мерчант">
        </form>

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
            @foreach($merchants as $merchant)
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
                        <form action="{{route('merchants.show',$merchant->id)}}" method="get">
                            <input type="submit" value="Редактировать">
                        </form>
                    </td>
                    <td>
                        <form action="{{route('merchants.destroy',$merchant->id)}}" method="post">
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

