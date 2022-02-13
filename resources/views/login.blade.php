@extends('layout')
@section('title') Авторизация @endsection 
@section('content')
<div class="container p-4 text-center pi-4 card w-25 mt-5 ">
<form action="/login" method="POST" enctype="multipart/form-data">
    @csrf
    <h1>Авторизация</h1>
    
    @error('email') <div class="text-danger">Вы не ввели email</div>@enderror
    
    <input type="email" name="email"  value="{{old('title')}}" id="email" placeholder="email"class="mb-1"><br>
    @error('password')<div class="text-danger">Вы не ввели пароль </div>@enderror
    <input type="password" name="password" value="{{old('content')}}" id="password" placeholder="password" class="mb-1"><br>
    <button id="add">Войти в аккаунт</button>
</form>

</div>
@endsection 