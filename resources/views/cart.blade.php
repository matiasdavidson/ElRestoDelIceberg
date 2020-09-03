@extends('layouts/app')

@section('title', 'Detalle del carrito ')

@section('content')
<head>
  <link href="{{ asset('css/cart.css') }}" rel="stylesheet">
</head>

<body>
<div class="forelsecontainer">
  <br>
  <h2>Carrito</h2>
  <br>
        @forelse ($cart as $item)
          <div class="cartProductsContainer">
          <h5 class="prodTittle">{{$item->name}}</h5>
          <div class="cartimgprodcont">
            <img class="cartprodimg" src="{{Storage::url($item->featured_img)}}" alt="">
          </div>
          <div class="">

          <form class="cantasegurar" action="/cart/{{$item->id}}" method="post">
              @csrf
              <div class="contadorCant">
                <p class="productPrice">${{$item->price}}</p>
                <input class='quantity quantity2' type="number" id="cant-product" name="cant" value="{{$item->cant}}"  min="1" max="10" style="margin-top:0.5em">
                {{-- <p class="productPrice">${{$item->price * $item->cant}}</p> --}}
              </div>
          </form>
        </div>


<div class="deleteProdButton">
  <form class="deleteButton" action="/cart/{{$item->id}}" method="post">
    @csrf <!--Capa de seguridad Obligatoria para Laravel-->
    {{ method_field('DELETE') }}
    <!-- lo de arriba equivale a <input type="hidden" name="_method" value= "delete" > -->
    <button type="submit" class="btn btn-light buttonDeleteDesk" value="Eliminar producto">Eliminar</button>
    <button type="submit" class="btn btn-light buttonDelete" value="Eliminar producto">X</button>

    {{-- <input type="submit" name="" value="Eliminar producto"> --}}
  </form>
</div>
</div>
        @empty
          <p>El carrito esta vacío</p>
        @endforelse

        <h6 class='total'>Total: {{$total}}</h6>
<br>
<a href="/purchase" class="btn btn-primary coprarButton">Comprar</a>
</div>
<br>
@endsection

<script src="/js/cart.js"></script>
</body>
