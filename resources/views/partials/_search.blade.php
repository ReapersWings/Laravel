@foreach ($listing as $data)
<tr>
    <th>
            {{ $data->title }}
        </th>
        <th>
            <a href="{{ route('updateedit',$data->id) }}"><button>Edit</button></a>
        </th>
        <td>
            <form action="{{ route('deletedata',$data->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <a href="{{ route('deletedata',$data->id) }}"><button>Delete</button></a>
            </form>
        </td>
</tr>
@endforeach