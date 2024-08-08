<table>
    <thead>
        <th>name</th>
        <th>email</th>
        <th>age</th>
        <th>select</th>
    </thead>
    @foreach ($data as $row)
        @foreach ($row as $rows)
            <tr>
                <td>{{ $rows['name'] }}</td>
                <td>{{ $rows['email'] }}</td>
                <td>{{ $rows['age'] }}</td>
                <td><a href="/listout/{{ $rows['id'] }}">Click</a></td>
            </tr>
        @endforeach
    @endforeach
</table>