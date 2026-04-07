<?php
  require_once 'Conect.php';


     
    $sql = "SELECT Nombre,Apellido,Edad,Direccion FROM estudiantes";
    $resultado = $conn->query($sql);
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Estudiantes registrados</h1>
    <a href="FormEstudianteRegistro.php"><button>Registrar nuevo estudiante</button></a>
    <table>
       <thead>
          <tr>
             <th>Nombre</th>
             <th>Apellido</th>
             <th>Edad</th>
             <th>Direccio</th>
          </tr>

       </thead>
       <tbody>
          <?php
           if($resultado -> num_rows>0){
            while($fila = $resultado->fetch_assoc()){
                echo "<tr>";
                echo "<td>".$fila["Nombre"]."</td>";
                echo "<td>".$fila["Apellido"]."</td>";
                echo "<td>".$fila["Edad"]."</td>";
                echo "<td>".$fila["Direccion"]."</td>";
                echo "</tr>";
            }


           }
           else{
            echo "<tr><td>No se encontraron registros</td></tr>";
           }

        ?>

       </tbody>

    </table>
    
</body>
</html>

<?php
   $conn->close();
?>