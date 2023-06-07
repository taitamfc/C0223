<h1>Khuong's Page</h1>

<ul>
<?php foreach( $users as $user ): ?>
<li><?= $user;?></li>
<?php endforeach; ?>
</ul>

<ul>
@foreach( $users as $user )
<li>{{ $user }}</li>
@endforeach
</ul>

<form method="post" action="{{ route('postKhuong') }}">
    @csrf
    username: <input type="text" name="username" id=""> <br>
    password: <input type="password" name="password" id=""> <br>
    <input type="submit" value="Login">
</form>