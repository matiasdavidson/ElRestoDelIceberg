<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Administrador</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <br>
      <h2>Cargar un producto</h2><br  />
      <form method="post" action="/create" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Nombre:</label>
            <input type="text" class="form-control" name="productName">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="description">Descripción: </label>
              <input type="text" class="form-control" name="productDescription" style="height:15em">
            </div>
          </div>
          <div class="row">
            <div class="col-md-4"></div>
              <div class="form-group col-md-4">
                <label for="stock">Stock:</label>
                <input type="text" class="form-control" name="stock">
              </div>
            </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="price">Precio:</label>
              <input type="text" class="form-control" name="price">
            </div>
          </div>




          <div class="form-group col-md-4">
            <label for="Diet">Categoría:</label>
            <select class="" name="category">
              @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->categoryName}}</option>
              @endforeach
            </select>

          </div>

  <div class="form-group col-md-4">
              <label for="Diet">Dietas:</label>
              <br>
              @foreach ($diets as $diet)
                <input type="checkbox" name="diets[]" value="{{$diet->id}}"><p>{{$diet->dietType}}</p>
              @endforeach
            </div>

<br>
<br>

            <div class="form-group col-md-4">
                        <label for="Attribute">Atributos:</label>
                        <br>
                        @foreach ($attributes as $attribute)
                          <input type="checkbox" name="attributes[]" value="{{$attribute->id}}"><p>{{$attribute->attributeName}}</p>
                        @endforeach
                      </div>

                      <br>
                      <br>





<label for="Image">Carga de imágenes:</label>
<div class="">
  <br>
  <input type="file" name="img1" style="width: 297px; margin: 0 auto">
  </div>
    {{-- <input type="submit" value="Cargar" name="submit" /> --}}
  <br>
  <div class="">
  <input type="file" name="img2" style="width: 297px; margin: 0 auto">
</div>
  <br>
  <input type="file" name="img3" style="width: 297px; margin: 0 auto">
</div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
        <br>
           <button type="submit" class="btn btn-success" style="margin-left:38px">Agregar producto</button>
          </div>
        </div>
        </div>
      </form>
    </div>
  </body>
</html>
