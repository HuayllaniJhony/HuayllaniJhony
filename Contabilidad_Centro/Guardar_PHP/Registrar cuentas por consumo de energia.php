<?php

require 'conexion.php';
$NumStand= $_POST['NumStand'];
$DueStand= $_POST['DueStand'];
$NoPagoLuz= $_POST['NoPagoLuz'];
$ConEner= $_POST['ConEner'];

$consulta= "INSERT INTO consumo_energia(NumStand, DueStand, NoPagoLuz, ConEner) VALUES ('$NumStand','$DueStand','$NoPagoLuz','$ConEner')"  ;
        $query=mysqli_query($mysqli,$consulta);
        if($query){
            echo "<script> alert('correcto');
            location.href = '../Mostrar_PHP/Mostrar cuentas por consumo de energia.php';
           </script>";
        }else{
            echo "<script> alert('incorrecto');
            location.href = '../registrar_HTML/Registrar cuentas por consumo de energia.html';
           </script>";
        }






?>