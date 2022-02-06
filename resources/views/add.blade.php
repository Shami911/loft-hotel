@extends('layout')
@section('title')Магазин мужской одежды@endsection
@section('content')
@if($errors->any())
@foreach($errors->all() as $error)
{{$error}}
@endforeach
@endif
<div class="text-center bg-secondary pb-5"><br>
  <form action="/add" method="post" enctype="multipart/form-data" class="bg-white rounded-3 w-25 mx-auto py-5">
    @csrf
    <h1 class="h3 mb-5 fw-normal">Настройки</h1>
    <div class="mb-2">
      <label for="img" class="col-form-label">Иконка</label><br>
      <input type="file" id="icon" name="icon" aria-describedby="" placeholder="Иконка">
    </div>
    <div class="mb-2">
        <label for="img" class="col-form-label">Задний фон</label><br>
        <input type="file" id="bgimage" name="bgimage" aria-describedby="" placeholder="Задний фон">
    </div>
    <div class="mb-3">
      <label for="title" class="form-label">Название</label><br>
      <input type="text" id="title" value="{{$info->title}}" name="title" placeholder="Название">
    </div>
    <div class="mb-3">
      <label for="discount" class="form-label">Слоган</label><br>
      <input type="text" id="slogan" value="{{$info->slogan}}" name="slogan" placeholder="Слоган">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Описание</label><br>
        <input type="text" id="description" value="{{$info->description}}" name="description" placeholder="Описание">
      </div>
    <div class="mb-3">
        <label for="clothes" class="form-label">Ключевые слова</label><br>
        <input type="text" id="keywords" value="{{$info->keywords}}" name="keywords" placeholder="Ключевые слова">
    </div>
    <button type="submit" class="btn btn-primary"><div>Добавить</div></button>
  </form>
</div>

@endsection