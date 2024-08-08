<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/index" method="post">
        @csrf
        <label for="">Username:</label>
        <input type="text" name="username">
        <label for="">Password:</label>
        <input type="text" name="password">
        <input type="submit">
    </form>
</body>
</html>