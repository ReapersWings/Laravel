@if (session()->has('massage'))
    <script>alert("{{ session('massage') }}")</script>
@endif
<form action="/register" method="post">
    @csrf
    <label for="">Username:</label>
    <input type="text" name="name" value="{{ old('name') }}">
    @error('name')
        <p>{{ $message }}</p>
    @enderror
    <label for="">Email:</label>
    <input type="text" name="email" value="{{ old('email') }}">
    @error('email')
        <p>{{ $message }}</p>
    @enderror
    <label for="">Age:</label>
    <input type="number" name="age" value="{{ old('age') }}">
    @error('age')
        <p>{{ $message }}</p>
    @enderror
    <label for="">Password</label>
    <input type="password" name="password" value="{{ old('password') }}">
    @error('password')
        <p>{{ $message }}</p>
    @enderror
    <label for="">Comfom password</label>
    <input type="password" name="password_confirmation">
    @error('password_confirmation')
        <p>{{ $message }}</p>
    @enderror
    <input type="submit">
</form>