<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>

<input type="text" name="search">
<table>
    <thead>
        <th>Listing name</th>
        <th>Edit</th>
        <th>Delete</th>
    </thead>
    <tbody>
         @foreach ($datas as $data)
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
    </tbody>
   
</table>
<a href="/listing"><button>Back</button></a>
    
</body>
</html>

<style>
    table,th,td{
        border:2px solid black;
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded',function(){
        const csrf=document.querySelector('meta[name="csrf-token"]');
        const searchinput =document.querySelector('input[name="search"]');
        searchinput.addEventListener('keyup',function(event){
            const searchValue = event.target.value.trim();
            fetch('{{ route("search") }}',{
                method:'POST',
                headers:{
                    'Content-Type':'application/json',
                    'X-CSRF-TOKEN': csrf.content
                },
                body:JSON.stringify({
                    search:searchValue
                })
            })
            .then(response=>{
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data=>{
                console.log(data);
                const searchResults = document.querySelector('table tbody');
                searchResults.innerHTML=data.html;
            })
            .catch(error=>console.error(error));
        })
    })
</script>