<form method="post" action="{{ route('users.update',$id) }}">
    @csrf
    username: <input type="text" name="username" value="{{ $username }}"> <br>
    password: <input type="password" name="password" id=""> <br>
    <input type="submit" value="Login">
</form>