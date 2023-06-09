@extends('admin.layouts.blank')

@section('title') Them moi user  @endsection

@section('content')
Xin chao toi la: {{ $name }}
Tong gio hang la: {{ $cart_total }}
<form method="post" action="{{ route('users.store') }}">
    @csrf
    username: <input type="text" name="username" id=""> <br>
    password: <input type="password" name="password" id=""> <br>
    <input type="submit" value="Login">
</form>
@endsection