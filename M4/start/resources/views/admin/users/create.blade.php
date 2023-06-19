@extends('admin.layouts.blank')

@section('title') Them moi user  @endsection

@section('content')

@if( Session::has('error') )
    {{ Session::get('error') }}
@endif

<form method="post" action="{{ route('users.store') }}" autocomplete="off">
    @csrf
    username: <input type="text"  name="username" id="" value="{{old('username')}}"> <br>
    @error('username')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    email: <input type="text"  name="email" id="" value="{{old('email')}}"> <br>
    @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    password: <input type="password" name="password" id="" value="{{old('password')}}"> <br>
    @error('password')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <input type="submit" value="Login">
</form>
@endsection