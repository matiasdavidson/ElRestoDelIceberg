@extends('layouts/app')

@section('title', 'Detalle del carrito ')

@section('content')

<head>
  <title>Su compra</title>
  <link rel="stylesheet" href="{{asset('css/purchase.css')}}">
</head>

<body>
  <div class="bigticket">
    <ul class="ticketdescription">
      @foreach ($cart as $product)
          <li class="productdescription"><p class="productticket">{{$product->name}}</p><p class="priceticket">${{$product->price}}</p></li>
      @endforeach
      <div class="totalticket">
        <p><strong>Total:</strong></p><p><strong>${{$total}}</strong></p>
      </div>
      <a href="/cartfinish"><button type="button" class="btn btn-success">Finalizar compra</button></a>
    </ul>
  </div>
</body>
@endsection
<strong></strong>
