<?php

   $host  = "localhost";
   $user  = "root";
   $pass  = "";
   $db    = "escuela";



   try{
    $conn = new mysqli($host,$user,$pass,$db);

  }
  catch(Error $e){
     die("Conexion fallida: ".$conn->connect_error);
  }

  /* if ($conn->connect_error){

      die("Error de conexion: ".$conn->connect_error);

   }
   else{
    echo "Conexion exitosa"; 
   } */


?>