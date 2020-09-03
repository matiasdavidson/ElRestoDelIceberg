@extends('layouts.app')
@section('pageTitle', "Búsqueda")
@section('content')

<head>
  <link rel="stylesheet" href="/css/search.css">
</head>

<h5 class="searchTittle">Resultado de la busqueda "{{$_GET['search']}}"</h5>

<div class="taggers">
<div class="dietResult">
  @foreach ($queryDietas as $diet)
    <div class="diet">
      <a class="resultbuttondiet" href="/diet/{{$diet->id}}"><button href="/diet/{{$diet->id}}" type="button" class="btn btn-outline-success btn-sm"><p class="resultAttribute">{{$diet->dietType}}</p></button></a>
    </div>
  @endforeach
</div>
<div class="attributeResult">
  @foreach ($queryAtributos as $attribute)
    <div class="attribute">
      <a class="resultbuttonattribute" href="/attribute/{{$attribute->id}}"><button href="/attribute/{{$attribute->id}}" type="button" class="btn btn-outline-success btn-sm"><p class="resultDiet" >{{$attribute->attributeName}}</p></button></a>
    </div>
  @endforeach
</div>
</div>



<div class="productcategory" ng-app="myApp">
@forelse ($queryProductos as $product)
  <div class="producto">
    <div class="img-producto-container" ng-controller="myCtrl" style="position: relative">
      <a href="/productshow/{{$product->id}}">
      <img class="imgproducto" style="position: relative" src="{{Storage::url($product->img1)}}" alt="" ng-image-appear responsive transition-duration="1s" animation="fadeInUp" animation-duration="1s" easing="ease-out">
      </a>
      <button type="button" class="btn" style="color:#393D40; position:absolute; top: 10%; right: 10%" data-toggle="modal" data-target="#exampleModalCenter{{$product->id}}">
        <i class="fa fa-info-circle" style="font-size:36px"></i>
      </button>
      <a style="position:absolute; top: 80%; right: 15%" href="/product/addtocart/{{$product->id}}"><button type="button" class="" style="border-radius:50%; background-color:#D69764; width:2.3em; height:2.3em; color:white; border:solid 0px white"><i class="fas fa-shopping-cart"></i></button></a>
    </div>
    <div class="info-producto-container">
      <a style="color:black; text-decoration:none" href="/productshow/{{$product->id}}"> <h3>{{$product->productName}}</h3></a>
      <p style="margin: 0; font-size:1.2em"><strong>${{$product->price}}</strong></p>
      <!-- Modal -->
      <div class="modal fade welcome" id="exampleModalCenter{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">

            <div class="modal-header welcome">
              <h5 class="modal-title" id="exampleModalLongTitle">{{$product->productName}}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body welcome">

              <div class="img-producto-container-welcome">
              <img class="imgproducto" src="{{Storage::url($product->img1)}}" alt="">
              </div>

              <div class="descriptionModal">
              <p class="proddescmodal">{{$product->productDescription}}</p>

                <p class="prodpricemodal">Precio: <strong>{{$product->price}}</strong></p>

                <a id="addtocartmodal" href="/product/addtocart/{{$product->id}}"><button type="button" class="" style="border-radius:50%; background-color:#D69764; width:2.3em; height:2.3em; color:white; border:solid 0px white"><i class="fas fa-shopping-cart"></i></button></a>
              </div>

            </div>


          </div>
        </div>
      </div>

    </div>
  </div>
@empty
  <p>No se encontraron productos en tu búsqueda</p>
@endforelse
</div>

@endsection
