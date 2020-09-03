@extends('layouts.app')
@section('pageTitle', "Perfil")
@section('content')
@php
  $user = auth()->user();
@endphp
  <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="{{asset('css/user.css')}}">
    </head>
    <body>
      <div class="container">
        <form action="{{url('user', [$user->id])}}" method="post">
          @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$user->name}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Apellido</label>
            <input type="text" name="lastname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$user->lastname}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$user->email}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Telefono</label>
            <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$user->phone}}">
          </div>
          

          <a href=""><button type="submit" class="btn btn-primary">Actualizar Perfil</button></a>
        </form>
</div>
</body>
</html>
@endsection
