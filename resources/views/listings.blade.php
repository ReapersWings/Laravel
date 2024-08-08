@if (session()->has('login'))
    <script>
        alert('{{ session("login") }}');
    </script>
@endif
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @auth
        <h1>{{ auth()->user()->name }}</h1>
        <form action="/logout" method="POST">
        @csrf
        <input type="submit" value="logout">
        </form>
        <a href="{{ route('manage') }}"><button>Mnage</button></a>
    @else

    @endauth
    <form action="/listing" method="get">
        <input type="text" name="search">
        <input type="submit" >
    </form>
    <a href="/"></a>
    <form action="/listing" method="get">
        @yield('listout')
    </form>
    

</body>
</html>
<style>
    table,th,td{
        border:2px solid black;
    }
</style>