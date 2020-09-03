@extends('layouts.app')
@section('pageTitle', "Atributos")
@section('content')

  <head>
    <link rel="stylesheet" href="{{asset('css/atdica.css')}}">
  </head>
<body>
<h1 class="elh1">Atributos</h1>

<ul class="elul">
@foreach ($attributes as $attribute)
    <li class="elli"><a class="ela" href="/attribute/{{$attribute->id}}">{{$attribute->attributeName}}</a></li>
@endforeach
</ul>

</body>
@endsection
