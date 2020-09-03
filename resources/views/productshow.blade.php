@extends('layouts.app')
@section('pageTitle', "$product->productName")
@section('content')
  <head>
    <link href="{{ asset('css/indexstyles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/productshow.css') }}" rel="stylesheet">
  </head>

<div class="productshowcontainer" style="">
  {{-- DIV IMAGEN --}}
  <div class="productshowelemento1" style="">

	<div class="row no-gutters">
<article class="gallery-wrap ">
{{--  --}}
{{--  --}}
@if ($product->img2 && $product->img3)

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner img-small-wrap">
    <div class="carousel-item active item-gallery productshowimagen" >
<img src="{{Storage::url($product->img1)}}" style="width:100%; height:100%">
</div>
    <div class="carousel-item item-gallery productshowimagen">
<img src="{{Storage::url($product->img2)}}" style="width:100%; height:100%">
</div>
    <div class="carousel-item item-gallery productshowimagen">
<img src="{{Storage::url($product->img3)}}" style="width:100%; height:100%">
</div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
</div>
@elseif ($product->img2 && !$product->img3)
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner img-small-wrap">
      <div class="carousel-item active item-gallery productshowimagen">
  <img src="{{Storage::url($product->img1)}}" style="width:100%; height:100%">
  </div>
      <div class="carousel-item item-gallery productshowimagen">
  <img src="{{Storage::url($product->img2)}}" style="width:100%; height:100%">
  </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Siguiente</span>
    </a>
  </div>
@else
  <div class="img-small-wrap">
    <div class="item-gallery productshowimagen" > <img src="{{Storage::url($product->img1)}}" style="width:100%; height:100%">
    </div> <!-- slider-nav.// -->
</div>
@endif
</article> <!-- gallery-wrap .end// -->
</div>
</div>

{{-- DIV INFO --}}
	<div class="productshowelemento2" style="">

<article class="p-5">
	<h3 class="title mb-3">{{$product->productName}}</h3>

<div class="mb-3">
	<var class="price h3 text-warning">
		<span class="currency">$</span><span class="num">{{$product->price}}</span>
	</var>
</div> <!-- price-detail-wrap .// -->
<dl>
  <dt>Descripción</dt>
  <dd><p>{{$product->productDescription}}</p></dd>
</dl>

<div class="row adc-shower">

  <div class="adc">
    <p class="tittleadc"><strong>Dietas:</strong></p>
    <div class="adcseparator">
      @foreach ($product->diets as $diet)
      <a href="/diet/{{$diet->id}}"> <p class="adcD">{{$diet->dietType}}</p></a>
      @endforeach
    </div>
  </div>

  <div class="adc">
    <p class="tittleadc"><strong>Atributos:</strong></p>
    <div class="adcseparator">
    @foreach ($product->attributes as $attribute)
      <a href="/attribute/{{$attribute->id}}"> <p class="adcD">{{$attribute->attributeName}}</p></a>
    @endforeach
  </div>
  </div>
</div>

<hr>
	<div class=" containercantpago" >
		<div class="opcion1" style="">
			<dl class="dlist-inline">
			  <dt>Cantidad: </dt>
			  <dd>
			  	{{-- <select class="form-control form-control-sm" style="width:70px;">
			  		<option> 1 </option>
			  		<option> 2 </option>
			  		<option> 3 </option>
            <option> 4 </option>
            <option> 5 </option>
            <option> 6 </option>
            <option> 7 </option>
            <option> 8 </option>
            <option> 9 </option>            <option> 10 </option>


			  	</select> --}}
			  </dd>
			</dl>  <!-- item-property .// -->


<div class="" style="Display:flex; width:100%">
<div class="" style="">

<div class="max-installments m-top-none d-inline">Hasta <strong class="js-installment-amount installment-amount">12</strong> cuotas</div>
<br>
<embed type="image/svg+xml" style="height:2em; width:2em" src="https://image.flaticon.com/icons/svg/349/349221.svg" />
<embed type="image/svg+xml" style="height:2em; width:2em; padding:left 1em" src="https://image.flaticon.com/icons/svg/1148/1148069.svg" />
<embed type="image/svg+xml" style="height:2em; width:2em; padding:left 1em" src="https://image.flaticon.com/icons/svg/179/179431.svg" />
<embed type="image/svg+xml" style="height:2em; width:2em; padding:left 1em" src="https://image.flaticon.com/icons/svg/25/25246.svg" />
<embed type="image/svg+xml" style="height:2em; width:2em; padding:left 1em" src="https://image.flaticon.com/icons/svg/138/138255.svg" />
</div>
</div>
</div>

<br>
<div class="opcion2">
  <div class="">
  <span class="js-shipping-calculator-label-default">
  <svg style="height: 1em; width: 1em" class="svg-inline--fa fa-lg m-right-quarter svg-icon-text" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M624 368h-16V251.9c0-19-7.7-37.5-21.1-50.9L503 117.1C489.6 103.7 471 96 452.1 96H416V56c0-30.9-25.1-56-56-56H56C25.1 0 0 25.1 0 56v304c0 30.9 25.1 56 56 56h8c0 53 43 96 96 96s96-43 96-96h128c0 53 43 96 96 96s96-43 96-96h48c8.8 0 16-7.2 16-16v-16c0-8.8-7.2-16-16-16zm-464 96c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm208-96H242.7c-16.6-28.6-47.2-48-82.7-48s-66.1 19.4-82.7 48H56c-4.4 0-8-3.6-8-8V56c0-4.4 3.6-8 8-8h304c4.4 0 8 3.6 8 8v312zm48-224h36.1c6.3 0 12.5 2.6 17 7l73 73H416v-80zm64 320c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm80-100.9c-17.2-25.9-46.6-43.1-80-43.1-24.7 0-47 9.6-64 24.9V272h144v91.1z"></path></svg>


</div> <!-- col.// -->

<div class="">
Conocé nuestras opciones de envío				</span>
</span>
</p>

</div>
<div class="">
<input type="tel" name="zipcode" class="form-control border-box input-shipping js-shipping-input shipping-zipcode d-inline-block pull-left m-right-quarter" placeholder="Código postal" value="" style="width:50%">

</div>
<br>
<input type="hidden" name="variant_id" id="shipping-variant-id" value="83146336">
<button class="js-calculate-shipping btn-shipping btn btn-secondary btn-small calculate-shipping-button d-inline-block">

  <span class="js-calculate-shipping-wording">Calcular envío</span>
  <span class="js-calculating-shipping-wording" style="display: none;">Calculando</span>
  <span class="loading d-inline-block m-left-quarter" style="display: none;"><svg class="svg-inline--fa fa-spin svg-icon-text" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M483.515 28.485L431.35 80.65C386.475 35.767 324.485 8 256 8 123.228 8 14.824 112.338 8.31 243.493 7.971 250.311 13.475 256 20.301 256h28.045c6.353 0 11.613-4.952 11.973-11.294C66.161 141.649 151.453 60 256 60c54.163 0 103.157 21.923 138.614 57.386l-54.128 54.129c-7.56 7.56-2.206 20.485 8.485 20.485H492c6.627 0 12-5.373 12-12V36.971c0-10.691-12.926-16.045-20.485-8.486zM491.699 256h-28.045c-6.353 0-11.613 4.952-11.973 11.294C445.839 370.351 360.547 452 256 452c-54.163 0-103.157-21.923-138.614-57.386l54.128-54.129c7.56-7.56 2.206-20.485-8.485-20.485H20c-6.627 0-12 5.373-12 12v143.029c0 10.691 12.926 16.045 20.485 8.485L80.65 431.35C125.525 476.233 187.516 504 256 504c132.773 0 241.176-104.338 247.69-235.493.339-6.818-5.165-12.507-11.991-12.507z"></path></svg></span>
</button>
<span class="js-ship-calculator-error invalid-zipcode alert alert-danger pull-left" style="display: none;">No encontramos este código postal. ¿Está bien escrito?</span>
<span class="js-ship-calculator-error js-ship-calculator-common-error alert alert-danger pull-left" style="display: none;">Ocurrió un error al calcular el envío. Por favor intentá de nuevo en unos segundos.</span>
<span class="js-ship-calculator-error js-ship-calculator-external-error alert alert-danger pull-left" style="display: none;">El calculo falló por un problema con el medio de envío. Por favor intentá de nuevo en unos segundos.</span>
<div class="js-shipping-calculator-response shipping-calculator-response m-top clear-both list-readonly " style="display: none;"></div>
</div>

</div>





	<hr>
<div class="">

<a href="/product/buycart/{{$product->id}}" class="btn  btn-primary" style="background-color:#EE7500; border: 0"> Comprar </a>
<a href="/product/addtocart/{{$product->id}}" class="btn  btn-outline-primary" style="background-color:#D69764; border: 0; color:white"> <i class="fas fa-shopping-cart"></i> Agregar al carrito </a>
</div>
</div>
</div>




</article> <!-- card-body.// -->

<article class="article">
	<h3 class="title mb-3">{{$product->productName}}</h3>

<div class="mb-3">
	<var class="price h3 text-warning">
		<span class="currency">$</span><span class="num">{{$product->price}}</span>
	</var>
</div> <!-- price-detail-wrap .// -->
<dl>
  <dt>Descripción</dt>
  <dd><p>{{$product->productDescription}}</p></dd>
</dl>

<div class="row adc-shower">

  <div class="adc">
    <p class="tittleadc"><strong>Dietas:</strong></p>
    <div class="adcseparator">
      @foreach ($product->diets as $diet)
      <a href="/diet/{{$diet->id}}"> <p class="adcD">{{$diet->dietType}}</p></a>
      @endforeach
    </div>
  </div>

  <div class="adc">
    <p class="tittleadc"><strong>Atributos:</strong></p>
    <div class="adcseparator">
    @foreach ($product->attributes as $attribute)
      <a href="/attribute/{{$attribute->id}}"> <p class="adcD">{{$attribute->attributeName}}</p></a>
    @endforeach
  </div>
  </div>
</div>

<hr>
	<div class=" containercantpago" >
		<div class="opcion1" style="">
			<dl class="dlist-inline">
			  <dt>Cantidad: </dt>
			  <dd>
			  	<select class="form-control form-control-sm" style="width:70px;">
			  		<option> 1 </option>
			  		<option> 2 </option>
			  		<option> 3 </option>
            <option> 4 </option>
            <option> 5 </option>
            <option> 6 </option>
            <option> 7 </option>
            <option> 8 </option>
            <option> 9 </option>            <option> 10 </option>


			  	</select>
			  </dd>
			</dl>  <!-- item-property .// -->


<div class="" style="Display:flex; width:100%">
<div class="" style="">

<div class="max-installments m-top-none d-inline">Hasta <strong class="js-installment-amount installment-amount">12</strong> cuotas</div>
<br>
<embed type="image/svg+xml" style="height:2em; width:2em" src="https://image.flaticon.com/icons/svg/349/349221.svg" />
<embed type="image/svg+xml" style="height:2em; width:2em; padding:left 1em" src="https://image.flaticon.com/icons/svg/1148/1148069.svg" />
<embed type="image/svg+xml" style="height:2em; width:2em; padding:left 1em" src="https://image.flaticon.com/icons/svg/179/179431.svg" />
<embed type="image/svg+xml" style="height:2em; width:2em; padding:left 1em" src="https://image.flaticon.com/icons/svg/25/25246.svg" />
<embed type="image/svg+xml" style="height:2em; width:2em; padding:left 1em" src="https://image.flaticon.com/icons/svg/138/138255.svg" />
</div>
</div>
</div>

<br>
<div class="opcion2">
  <div class="">
  <span class="js-shipping-calculator-label-default">
  <svg style="height: 1em; width: 1em" class="svg-inline--fa fa-lg m-right-quarter svg-icon-text" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M624 368h-16V251.9c0-19-7.7-37.5-21.1-50.9L503 117.1C489.6 103.7 471 96 452.1 96H416V56c0-30.9-25.1-56-56-56H56C25.1 0 0 25.1 0 56v304c0 30.9 25.1 56 56 56h8c0 53 43 96 96 96s96-43 96-96h128c0 53 43 96 96 96s96-43 96-96h48c8.8 0 16-7.2 16-16v-16c0-8.8-7.2-16-16-16zm-464 96c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm208-96H242.7c-16.6-28.6-47.2-48-82.7-48s-66.1 19.4-82.7 48H56c-4.4 0-8-3.6-8-8V56c0-4.4 3.6-8 8-8h304c4.4 0 8 3.6 8 8v312zm48-224h36.1c6.3 0 12.5 2.6 17 7l73 73H416v-80zm64 320c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm80-100.9c-17.2-25.9-46.6-43.1-80-43.1-24.7 0-47 9.6-64 24.9V272h144v91.1z"></path></svg>


</div> <!-- col.// -->

<div class="">
Conocé nuestras opciones de envío				</span>
</span>
</p>

</div>
<div class="">
<input type="tel" name="zipcode" class="form-control border-box input-shipping js-shipping-input shipping-zipcode d-inline-block pull-left m-right-quarter" placeholder="Código postal" value="" style="width:50%">

</div>
<br>
<input type="hidden" name="variant_id" id="shipping-variant-id" value="83146336">
<button class="js-calculate-shipping btn-shipping btn btn-secondary btn-small calculate-shipping-button d-inline-block">

  <span class="js-calculate-shipping-wording">Calcular envío</span>
  <span class="js-calculating-shipping-wording" style="display: none;">Calculando</span>
  <span class="loading d-inline-block m-left-quarter" style="display: none;"><svg class="svg-inline--fa fa-spin svg-icon-text" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M483.515 28.485L431.35 80.65C386.475 35.767 324.485 8 256 8 123.228 8 14.824 112.338 8.31 243.493 7.971 250.311 13.475 256 20.301 256h28.045c6.353 0 11.613-4.952 11.973-11.294C66.161 141.649 151.453 60 256 60c54.163 0 103.157 21.923 138.614 57.386l-54.128 54.129c-7.56 7.56-2.206 20.485 8.485 20.485H492c6.627 0 12-5.373 12-12V36.971c0-10.691-12.926-16.045-20.485-8.486zM491.699 256h-28.045c-6.353 0-11.613 4.952-11.973 11.294C445.839 370.351 360.547 452 256 452c-54.163 0-103.157-21.923-138.614-57.386l54.128-54.129c7.56-7.56 2.206-20.485-8.485-20.485H20c-6.627 0-12 5.373-12 12v143.029c0 10.691 12.926 16.045 20.485 8.485L80.65 431.35C125.525 476.233 187.516 504 256 504c132.773 0 241.176-104.338 247.69-235.493.339-6.818-5.165-12.507-11.991-12.507z"></path></svg></span>
</button>
<span class="js-ship-calculator-error invalid-zipcode alert alert-danger pull-left" style="display: none;">No encontramos este código postal. ¿Está bien escrito?</span>
<span class="js-ship-calculator-error js-ship-calculator-common-error alert alert-danger pull-left" style="display: none;">Ocurrió un error al calcular el envío. Por favor intentá de nuevo en unos segundos.</span>
<span class="js-ship-calculator-error js-ship-calculator-external-error alert alert-danger pull-left" style="display: none;">El calculo falló por un problema con el medio de envío. Por favor intentá de nuevo en unos segundos.</span>
<div class="js-shipping-calculator-response shipping-calculator-response m-top clear-both list-readonly " style="display: none;"></div>
</div>

</div>





	<hr>
<div class="">

<a style="background-color:#EE7500; border: 0" href="/product/buycart/{{$product->id}}" class="btn  btn-primary"> Comprar </a>

<a href="/product/addtocart/{{$product->id}}" class="btn  btn-outline-primary" style="background-color:#D69764; border: 0; color:white"> <i class="fas fa-shopping-cart"></i> Agregar al carrito </a>
</div>
</div>
</div>




</article> <!-- card-body.// -->

  </div>
</div>

@endsection
