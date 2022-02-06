@extends('layout')
@section('title') Регистрация @endsection 
@section('content')
<div class="container p-4 text-center pi-4 card w-25 mt-5">
<form action="/register" method="POST">
    @csrf
        <h1>Регистрация</h1>
        @error('email')<div class="text-danger">Вы не ввели email</div>@enderror
        <input type="email" name="email"  value="{{old('email')}}" id="email" placeholder="email"><br>
        @error('password')<div class="text-danger">Вы не ввели password</div>@enderror
        <input type="password" name="password" id="password" placeholder="password"><br>
        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="password_confirmation"><br>
        <button>Регистрация</button>
</form>

</div>
@endsection 