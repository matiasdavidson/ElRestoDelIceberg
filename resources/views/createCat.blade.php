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
      <h2>Cargar un categoria</h2><br  />
      <form method="post" action="/createCat">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">categoría: </label>
            <input type="text" class="form-control" name="categoryName">

           <button type="submit" class="btn btn-success" style="margin-left:38px">Agregar categoria</button>

        </div>
        </div>
      </form>
    </div>
  </body>
</html>
