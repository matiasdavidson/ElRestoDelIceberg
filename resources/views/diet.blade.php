@extends('layouts.app')
@section('pageTitle', "Dietas")
@section('content')

  <head>
    <link rel="stylesheet" href="{{asset('css/atdica.css')}}">
  </head>

<body>
<h1 class="elh1">Dietas</h1>

<ul class="elul">
@foreach ($diets as $diet)
    <li class="elli"><a class="ela" href="/diet/{{$diet->id}}">{{$diet->dietType}}</a></li>
@endforeach
</ul>

</body>
@endsection
