@extends('layouts.app')
@section('pageTitle', "Categorías")
@section('content')

<head>
  <link rel="stylesheet" href="{{asset('css/atdica.css')}}">
</head>

<body>
<h1 class="elh1">Categorias</h1>

<ul class="elul">
@foreach ($categories as $category)
    <li class="elli"><a class="ela" href="/category/{{$category->id}}">{{$category->categoryName}}</a></li>
@endforeach
</ul>

</body>
@endsection
