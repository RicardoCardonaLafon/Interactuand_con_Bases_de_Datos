<?php

  require('lib.php');

  $con = new ConectorBD();

  if ($con->initConexion('agenda_db')=='OK') {
    $conexion = $con->getConexion();

    $insert = $conexion->prepare('INSERT INTO usuarios (Nombre_Usuario, Pasw, Nombre_Completo, Fecha_Nacimiento) VALUES (?,?,?,?)');
    $insert->bind_param("ssss", $Nombre_Usuario, $Pasw, $Nombre_Completo, $Fecha_Nacimiento);
    /*$insert->bind_param(1, $Nombre_Usuario);
    $insert->bind_param(2, $Pasw);
    $insert->bind_param(3, $Nombre_Completo);
    $insert->bind_param(4, $Fecha_Nacimiento);*/
      

    $Nombre_Usuario = 'martin.lafon@mail.com';
    $Pasw = password_hash("primer_usu_12345", PASSWORD_DEFAULT);
    $Nombre_Completo = 'Martin Lafon';
    $Fecha_Nacimiento = '1985/2/15';  
      
    $insert->execute();

    $Nombre_Usuario = 'nelly.balbi@mail.com';
    $Pasw = password_hash("segundo_usu_12345", PASSWORD_DEFAULT);
    $Nombre_Completo = 'Nelly Balbi';
    $Fecha_Nacimiento = '1990/11/2';  
      
    $insert->execute();

    $Nombre_Usuario = 'ricardo.cardona@mail.com';
    $Pasw = password_hash("tercer_usu_12345", PASSWORD_DEFAULT);
    $Nombre_Completo = 'Ricardo Cardona';
    $Fecha_Nacimiento = '1965/6/14';  
      
    $insert->execute();
      
    echo "Se insertaron los registros exitosamente";

    $con->cerrarConexion();

  }else {
    echo "Se presentó un error en la conexión";
  }




 ?>
