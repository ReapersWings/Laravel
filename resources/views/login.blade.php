@if (session()->has('message'))
    <script>
        alert('{{ session("message") }}');
    </script>
@endif
<form action="/login" method="POST">
@csrf
<label for="">Email:</label>
<input type="text" name="email">
@error('email')
    <p>{{ $message }}</p>
@enderror
<label for="">Password:</label>
<input type="password" name="password">
@error('password')
    <p>{{ $message }}</p>
@enderror
<input type="submit">

</form>
<a href="/register">Register</a>