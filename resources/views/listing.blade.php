@extends('listings')
@section('listout')
<a href="/create">Create</a>
<table>
    <thead>
        <th>Image</th>
        <th>name</th>
        <th>Tag</th>
        <th>company</th>
        <th>Link</th>
    </thead>
    
    @foreach ($listing as $row)
        <tr>
            <td style="height:100px">
                <img  style="width:100%;height:100%" src="{{ $row['logo'] ? asset("storage/".$row['logo']) : asset("storage/logo/i3CFI1hHF1KmbD1fqGolMt9KDRzJb3qePa5zV2XQ.jpg")  }}" alt="">
            </td>
            <td>{{ $row->title }}</td>
            <td><x-loop-tags :looptags="$row['tag']"/></td>
            <td>{{ $row->company }}</td>
            <td><a href="/listing/{{ $row->id }}">click</a></td>
        </tr>

    @endforeach
</table>
{{ $listing->links() }}
    
@endsection
