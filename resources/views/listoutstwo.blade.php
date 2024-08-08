<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($data as $row)
        <p>Name : {{ $row[0]['name'] }}</p>
        <p>Email : {{ $row[0]['email'] }}</p>
        <p>Age : {{ $row[0]['age'] }}</p>
        <p>Gender : {{ $row[0]['gender'] }}</p>
        <p>Phone Number : {{ $row[0]['phone_number'] }}</p>
        <p>Addres : {{ $row[0]['address'] }}</p>
        <p>City : {{ $row[0]['city'] }}</p>
        <p>state : {{ $row[0]['state'] }}</p>
    @endforeach
    
</body>
</html>