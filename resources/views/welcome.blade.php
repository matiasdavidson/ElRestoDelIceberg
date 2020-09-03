@extends('layouts.app')
@section('pageTitle', "ERDI")
@section('content')


<!-- CARROUSEL IMAGENES -->
</div>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2" ></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active carousel3 parallax1" "carousel CSS" style="background-image:url('images/Natural Food.jpg'); background-size:cover; background-position:center">
        <a href="/category/9">  <img class="d-block w-100" id="img-carousel" src="" alt=""></a>
      </div>
      <div class="carousel-item carousel3 parallax2" style="background-image:url('images/nuts 1.jpg'); background-size:cover;">
      <a href="/category/11">  <img class="d-block w-100" id="img-carousel" src="" alt=""></a>
      </div>
      <div class="carousel-item carousel3 parallax3"  style="background-image:url('images/berries.jpg'); background-size:cover; background-position:center">
        <a href="/category/10"> <img class="d-block w-100" id="img-carousel" src="" alt=""></a>
      </div>
      <div class="carousel-item carousel3 parallax4" style="background-image:url('images/miel-natural.jpg'); background-size:cover; background-position:center">
        <a href="/category/17">  <img class="d-block w-100" id="img-carousel" src="" alt=""></a>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Próximo</span>
    </a>
  </div>
</div>

{{-- DIV DE ICONOS DESK + ICONOS MOBILE --}}
<div class="" style="margin-top:2em; margin-bottom:2em">

<div class="contenedor-iconosbajocarousel" >
<div class="contenedor-iconosbajocarousel-cadaicono">
<svg class="svg-inline--fa fa-w-20 fa-5x service-icon svg-icon-text svgiceberg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 89.72 69.42"><path d="M83.21.29H6.79A6.65,6.65,0,0,0,.14,6.93V63.07a6.65,6.65,0,0,0,6.65,6.64H83.21a6.65,6.65,0,0,0,6.65-6.64V6.93A6.65,6.65,0,0,0,83.21.29Zm-81.07,15H87.86V28.76H2.14Zm4.65-13H83.21a4.65,4.65,0,0,1,4.65,4.64v6.4H2.14V6.93A4.65,4.65,0,0,1,6.79,2.29ZM83.21,67.71H6.79a4.65,4.65,0,0,1-4.65-4.64V30.76H87.86V63.07A4.65,4.65,0,0,1,83.21,67.71ZM29.68,51.9H14.25a1,1,0,0,0,0,2H29.68a1,1,0,0,0,0-2Zm30.86,0H34.82a1,1,0,0,0,0,2H60.54a1,1,0,0,0,0-2Z"></path></svg>
<h3 class="service-title" >3 cuotas sin interés!</h3>
<p class="font-weight-light" >Con todas las tarjetas y bancos</p>
</div>

<div class="" style="text-align:center; padding:1em; width:33%">
<svg class="svg-inline--fa fa-w-20 fa-5x service-icon svg-icon-text" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 88 69.96" style="width:30%; height:1em"><path d="M87.93,34.84a.5.5,0,0,0-.08-.12.59.59,0,0,0-.1-.17l-16-18.23A1,1,0,0,0,71,16H60.53V6.65A6.63,6.63,0,0,0,53.9,0H6.63A6.63,6.63,0,0,0,0,6.65V49.19a6.64,6.64,0,0,0,6.63,6.64h3.64a10.7,10.7,0,1,0,20.24,0H63a10.7,10.7,0,1,0,20.24,0H87a1,1,0,0,0,1-1V35.21A1.16,1.16,0,0,0,87.93,34.84ZM70.58,18,84.8,34.21H60.53V18ZM20.39,68a8.71,8.71,0,1,1,8.7-8.71A8.72,8.72,0,0,1,20.39,68Zm0-19.41a10.7,10.7,0,0,0-9.2,5.25H6.63A4.63,4.63,0,0,1,2,49.19V6.65A4.63,4.63,0,0,1,6.63,2H53.9a4.64,4.64,0,0,1,4.64,4.64V53.83h-29A10.69,10.69,0,0,0,20.39,48.58ZM73.07,68a8.71,8.71,0,1,1,8.7-8.71A8.72,8.72,0,0,1,73.07,68Zm9.19-14.16a10.67,10.67,0,0,0-18.38,0H60.53V36.21H86V53.83Z"></path></svg>
<h3 class="service-title">Envío gratis!</h3>
<p class="font-weight-light">En pedidos mayores a 2600 pesos</p>
</div>


<div class="" style="text-align:center; padding:1em; width:33%">
<svg class="svg-inline--fa fa-w-16 fa-6x service-icon svg-icon-text" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 79.82 86" style="width:30%; height:1em"><path d="M40,86a1,1,0,0,1-.34-.06C8,74.58-1.59,35.33.32,16.84A1,1,0,0,1,.94,16L39.62.07a1.1,1.1,0,0,1,.76,0L79.06,16a1,1,0,0,1,.62.83C81.59,35.33,72,74.58,40.34,85.94A1,1,0,0,1,40,86ZM2.26,17.63C.67,35.75,10,72.92,40,83.94c30-11,39.33-48.19,37.74-66.31L40,2.08ZM33.1,58.69a1,1,0,0,1-.71-.29L16.78,42.85a1,1,0,1,1,1.41-1.42L33.1,56.28,64.19,25.44a1,1,0,0,1,1.41,1.42L33.8,58.4A1,1,0,0,1,33.1,58.69Z"></path></svg>
<h3 class="service-title">Sitio seguro!</h3>
<p class="font-weight-light">Certificado SSL</p>
</div>

</div>

<!-- CAROUSEL/CUADRO CATEGORIAS -->

<div class="categorias-container">

  <div class="categoria">
    <a class="circulito" href="/diet/3"><img class="img-categoria" src="images/celiaco icono2.png" alt=""></a>
  </div>

  <div class="categoria">
    <a class="circulito" href="/diet/2"><img class="img-categoria-vegan" src="images/vegan icono.png" alt=""></a>
  </div>

  <div class="categoria">
    <a class="circulito" href="/diet/2"><img class="img-categoria-vegetariano" src="images/cruelty free icono.svg" alt=""></a>
  </div>

  <div class="categoria">
    <a class="circulito" href="/diet/6"><img class="img-categoria-organico" src="images/organico icono.svg" alt=""></a>
  </div>

</div>
</div>
{{-- FIN DIV ICONOS DESK + ICONOS MOBILE --}}


<div class="container-productos-busqueda">

  <!-- FILTROS -->

  <div class="busqueda">
    <form class="" action="{{ url('/') }}" method="get">
  <h3>Búsqueda por filtros</h3>
  <br>
<button type="submit" class="btn btn-outline-warning deArriba">Aplicar</button>

  <h4 class="filterTittle">Dietas:</h4>
      @foreach ($diets as $diet)
        <div class="dietFilter">
        <input class="checkboxDiet" type="checkbox" name="diets[]" value="{{$diet->id}}" {{ in_array($diet->id, request('diets') ?? []) ? 'checked' : '' }}><p class="dietCheck">{{$diet->dietType}}</p>
      </div>
      @endforeach
      <h4 class="filterTittle">Attributos:</h4>
      @foreach ($attributes as $attribute)
        <div class="attributeFilter">
        <input
          class="checkboxAttribute" type="checkbox" name="attributes[]"
          value="{{$attribute->id}}" {{ in_array($attribute->id, request('attributes') ?? []) ? 'checked' : '' }}>
        <p class="attributeCheck">{{$attribute->attributeName}}</p>
      </div>
      @endforeach
      <br>
      <button type="submit" class="btn btn-outline-warning deAbajo">Aplicar</button>
    </form>
  </div>

  <!-- PRODUCTOS -->

  <div class="productcategory">
  @foreach ($products as $product)
    <div class="producto">
      <div class="img-producto-container"  style="position: relative">
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

                <div class="">
                <div class="descriptionModal">
                <p class="proddescmodal">{{$product->productDescription}}</p>

</div>
<div class="descriptionModal">

                  <p class="prodpricemodal">Precio: <strong>{{$product->price}}</strong></p>
                </div>

                  <a id="addtocartmodal" href="/product/addtocart/{{$product->id}}"><button type="button" class="" style="border-radius:50%; background-color:#D69764; width:2.3em; height:2.3em; color:white; border:solid 0px white"><i class="fas fa-shopping-cart"></i></button></a>
                </div>

              </div>


            </div>
          </div>
        </div>

      </div>
    </div>
  @endforeach
  </div>

</div>

@endsection
