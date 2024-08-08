@if (session()->has('massage'))
    <script>alert("{{ session('massage') }}")</script>
@endif
<script>

</script>
<form action="/create" method="post" enctype="multipart/form-data">
    @csrf
    <label for="">Title:</label><br>
    <input type="text" name="title" value="{{ old('title') }}"><br>
    @error('title')
        <p style='color:red'>{{ $massage }}</p>
    @enderror

    <label for="">Limit Age:</label><br>
    <input type="number" name="age_limit" value="{{ old('age_limit') }}" min="0"><br>
    @error('age_limit')
        <p style='color:red'>{{ $massage }}</p>
    @enderror

    <label for="">Company:</label><br>
    <input type="text" name="company" value="{{ old('company') }}"><br>
    @error('company')
        <p style='color:red'>{{ $massage }}</p>
    @enderror   
    
    <label for="">Tag:</label><br>
    <input type="text" name="tag" value="{{ old('tag') }}"><br>
    @error('tag')
        <p style='color:red'>{{ $massage }}</p>
    @enderror
    
    <label for="">Location:</label><br>
    <input type="text" name="location" value="{{ old('location') }}"><br>
    @error('location')
        <p style='color:red'>{{ $massage }}</p>
    @enderror
    
    <label for="">Email:</label><br>
    <input type="text" name="email" value="{{ old('email') }}"><br>
    @error('email')
        <p style='color:red'>{{ $massage }}</p>
    @enderror
    
    <label for="">Website:</label><br>
    <input type="text" name="website" value="{{ old('website') }}"><br>
    @error('website')
        <p style='color:red'>{{ $massage }}</p>
    @enderror

    <label for="">Image:</label><br>
    <input type="file" name="logo" value="{{ old('logo') }}"><br>

    <label for="">description:</label><br>
    <textarea name="description" id="" cols="30" rows="10" value="{{ old('description') }}"></textarea><br>
    @error('description')
        <p style='color:red'>{{ $massage }}</p>
    @enderror
    <input type="submit">
    <a href="/listing">back</a>
</form>