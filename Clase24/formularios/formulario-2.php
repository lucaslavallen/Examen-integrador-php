<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
     <h1>Realizar el formulario 2</h1>

     <form method="POST" action="../respuestas-formularios/respu-form2.php">
     <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputName">Nombre</label>
      <input type="text" name="nombre" class="form-control" id="inputEmail4" placeholder="Nombre">
    </div>

    <div class="form-group col-md-6">
      <label for="inputName">Apellido</label>
      <input type="text" name="apellido" class="form-control" id="inputEmail4" placeholder="Apellido">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Corro Electronico</label>
      <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>

    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputNumber">Telefono</label>
      <input type="number" name="telefono" class="form-control" id="inputEmail4" placeholder="Telefono">
    </div>

    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputNumber">Edad</label>
      <input type="edad" name="edad" class="form-control" id="inputEmail4" placeholder="Edad">
    </div>

    <button type="submit">enviar</button>
</form>


</body>
</html>