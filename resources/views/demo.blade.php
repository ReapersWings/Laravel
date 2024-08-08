
    @foreach ($demo as $row)
        <p>{{ $row['d_id'] }}
        {{ $row['d_name'] }}
        {{ $row['d_age'] }}
        {{ $row['d_class'] }}
        <a href="/listdata/{{ $row['d_id'] }}">click</a></p>
    @endforeach 
