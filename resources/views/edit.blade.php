@if (session()->has('massage'))
    <script>alert("{{ session('massage') }}")</script>
@endif
<script>

</script>
<form action="{{ route('updateedit1',$data->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label for="">Title:</label><br>
    <input type="text" name="title" value="{{ $data->title }}"><br>
    @error('title')
        <p style='color:red'>{{ $massage }}</p>
    @enderror

    <label for="">Limit Age:</label><br>
    <input type="number" name="age_limit" value="{{ old('age_limit') }}" min="0"><br>
    @error('age_limit')
        <p style='color:red'>{{ $massage }}</p>
    @enderror

    <label for="">Company:</label><br>
    <input type="text" name="company" value="{{ $data->company }}"><br>
    @error('company')
        <p style='color:red'>{{ $massage }}</p>
    @enderror   
    
    <label for="">Tag:</label><br>
    <input type="text" name="tag" value="{{ $data->tag }}"><br>
    @error('tag')
        <p style='color:red'>{{ $massage }}</p>
    @enderror
    
    <label for="">Location:</label><br>
    <input type="text" name="location" value="{{ $data->location }}"><br>
    @error('location')
        <p style='color:red'>{{ $massage }}</p>
    @enderror
    
    <label for="">Email:</label><br>
    <input type="text" name="email" value="{{ $data->email }}"><br>
    @error('email')
        <p style='color:red'>{{ $massage }}</p>
    @enderror
    
    <label for="">Website:</label><br>
    <input type="text" name="website" value="{{ $data->website }}"><br>
    @error('website')
        <p style='color:red'>{{ $massage }}</p>
    @enderror

    <label for="">Image:</label><br>
    <input type="file" name="logo" value="{{ $data->logo }}"><br>
    <img src="{{ $data->logo ? asset("storage/".$data->logo) : asset("storage/logo/i3CFI1hHF1KmbD1fqGolMt9KDRzJb3qePa5zV2XQ.jpg")  }}" alt=""><br>

    <label for="">description:</label><br>
    <textarea name="description" id="" cols="30" rows="10">{{ $data->description }}</textarea><br>
    @error('description')
        <p style='color:red'>{{ $massage }}</p>
    @enderror
    <input type="submit">
    <a href="/listing">back</a>
</form>
<style>
    img{
        width: 100px;
        height: 100px ;
        border:2px solid black;
    }
</style>