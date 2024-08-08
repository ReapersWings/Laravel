<table>
    <thead>
        <th>Fruit</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Select</th>
    </thead>
    <tbody>
        @foreach ($data as $row)
            <tr>
                <td>{{ $row->f_name }}</td>
                <td>{{ $row->quantity }}</td>
                <td>{{ $row->price }}</td>
                <td><a href="/fruit/{{ $row->id }}">Click</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
<style>
    table,th,td{
        border: 2px solid black;    
    }
</style>