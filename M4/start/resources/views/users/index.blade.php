<h1>Khuong's Page</h1>

<form method="post" action="{{ route('postKhuong') }}">
    @csrf
    username: <input type="text" name="username" id=""> <br>
    password: <input type="password" name="password" id=""> <br>
    <input type="submit" value="Login">
</form>