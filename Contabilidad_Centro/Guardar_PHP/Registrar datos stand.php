<?php

require 'conexion.php';
$NumStand= $_POST['NumStand'];
$DueStand= $_POST['DueStand'];
$NumCelular= $_POST['NumCelular'];
$EstEtand= $_POST['EstStand'];
$UbiStand= $_POST['UbiStand'];

$consulta= "INSERT INTO registrar_stand (NumStand, DueStand, NumCelular, EstStand , UbiStand ) VALUES ('$NumStand','$DueStand','$NumCelular','$EstEtand','$UbiStand')"  ;
        $query=mysqli_query($mysqli,$consulta);
        if($query){
            echo "<script> alert('correcto');
            location.href = '../Mostrar_PHP/Mostrar datos de Stand.php';
           </script>";
        }else{
            echo "<script> alert('incorrecto');
            location.href = '../registrar_HTML/Registrar datos de Stand.html';
           </script>";
        }






?>