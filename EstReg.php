<?php 
   
   require_once 'Conect.php';

   if($_SERVER['REQUEST_METHOD'] == "POST"){
       $nombre = trim($_POST["nombre"]);
       $apellido = trim($_POST["apellido"]);
       $edad = trim($_POST["edad"]);
       $direccion = trim($_POST["direccion"]);

     try{
        $sql = $conn->prepare("INSERT INTO estudiantes (Nombre,Apellido,Edad,Direccion) 
        VALUES (?,?,?,?)");

        $sql->bind_param("ssis",$nombre,$apellido,$edad,$direccion);

        if($sql->execute()){
            echo "Usuario registrado exitosamente";
            header("Location:index.php");
        }
        else{
            echo "Error: ".$sql->error;
        }
    }
    catch(error $e){
        echo "Registro fallido".$e;
    }
    $sql->close();
    $conn->close();

   }


?>