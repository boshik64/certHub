<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('head')
</head>
<body>
<div>
    <nav>
        <ul>
            <li><a href="#">Главная</a></li>
            <li><a href="{{route('merchants.index')}}">Мерчанты</a></li>
            <li><a href="{{route('cinemas.index')}}">Кинотеатры</a></li>
            <li><a href="{{route('company_titles.index')}}">Юр.лица</a></li>
        </ul>
    </nav>
</div>
@yield('content')
</body>
</html>
