@extends('layout')
@section('title')Комментарии@endsection
@section('content')
@if($errors->any())
@foreach($errors->all() as $error)
{{$error}}
@endforeach
@endif
<div class="text-center pb-5" style="background-image: url()"><br>
  <form action="/portfolio_coment/" method="post" enctype="multipart/form-data" class="bg-white rounded-3 w-25 mx-auto py-5">
    @csrf
    <h1 class="h3 mb-5 fw-normal">Комментарии</h1>
    <div class="mb-3">
      <label for="title" class="form-label">Добавить Комментарии</label><br>
      <input type="text" id="coment"  name="coment" placeholder="Комментарии">
    </div>
    <button type="submit" class="btn btn-primary"><div>Добавить</div></button>
  </form>
</div>
@endsection