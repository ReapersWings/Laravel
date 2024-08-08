<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <th>No.</th>
            <th>Name</th>
            <th>Age</th>
            <th>select</th>
        </thead>
        <tbody>
            @foreach ($student as $students)
                <tr>
                    
                    <td>{{ $students["id"] }}</td>
                    <td>{{ $students["name"] }}</td>
                    <td>{{ $students["age"] }}</td>
                    <td><a href="/list/{{ $students["id"] }}">Click</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
 
</body>
</html>
<style>
    table,th,td{
        border:2px solid black;
    }
</style>