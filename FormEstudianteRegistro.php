<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1>Nuevo registro de estudiante</h1>

  <form action="EstReg.php" method="post">
     <label for="">Nombre</label>
     <input type="text" name="nombre" id="" required>
     <label for="">Apellido</label>
     <input type="text" name="apellido" id="" required>
     <label for="">Edad</label>
     <input type="number" name="edad" id="" required>
     <label for="">Direccion</label>
     <textarea name="direccion" id=""></textarea>
     <button type="submit">Guardar</button>
  </form>


    
</body>
</html>