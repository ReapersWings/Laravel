@if (session()->has('massage'))
    <script>alert("{{ session('massage') }}")</script>
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
    <a href="/listing">Back</a><br>
    <img src="{{ $data->logo ? asset("storage/".$data->logo) : asset("storage/logo/i3CFI1hHF1KmbD1fqGolMt9KDRzJb3qePa5zV2XQ.jpg")  }}" alt="">
    <h1>{{ $data->title }}</h1>
    <h3>{{ $data->company }}</h3>
    <form action="/listing" method="GET">
        <x-loop-tags :looptags="$data->tag"/>
    </form>
    <div>
        <p>location:{{ $data->location }}</p>
        <p>Email:{{ $data->email }}</p>
        <p>Website:<a href="{{ $data->website }}">{{ $data->website }}</a></p>
        <p>Description:</p>
        <p>{{ $data->description }}</p>
        
        
    </div>
</body>
</html>