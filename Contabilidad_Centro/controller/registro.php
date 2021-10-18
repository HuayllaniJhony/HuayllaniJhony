<?php
require_once("../Guardar_PHP/conexion.php");
require_once("../models/registro.php");
$registros= new registro();

switch($_GET["op"]){
    case "guardaryeditar":
        if (empty($_POST["ID"])) {
            $registros->insert_registro($_POST["NumStand"],$_POST["DueStand"],$_POST["NumCelular"],$_POST["EstStand"],$_POST["UbiStand"]);
        }else {
                $registros->update_registro($_POST["ID"],$_POST["NumStand"],$_POST["DueStand"],$_POST["NumCelular"],$_POST["EstStand"],$_POST["UbiStand"]);
        }
        break;

    case "listar":
        $datos=$registros->listar_registro();
            $data=Array();
            foreach($datos as $row){
                $sub_array = array();
                $sub_array[]=$row["NumStand"];
                $sub_array[]=$row["DueStand"];
                $sub_array[]=$row["NumCelular"];
                $sub_array[]=$row["EstStand"];
                $sub_array[]=$row["UbiStand"];
                $sub_array[]='<button type="button" onClick="editar('.$row["ID"].');"  id="'.$row["ID"].'" class="btn btn-inline btn-warning btn-sm ladda-button"><i class="fa fa-edit"></i></button>';
                $sub_array[]='<button type="button" onClick="eliminar('.$row["ID"].');"  id="'.$row["ID"].'" class="btn btn-inline btn-danger btn-sm ladda-button"><i class="fa fa-trash"></i></button>';
                $data[]=$sub_array;
            }
            $results = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data);
            echo json_encode($results);
            break;
        
            case "mostrar":
                $datos=$registros->get_registro_x_id($_POST["ID"]);
                if(is_array($datos)==true and count($datos)>0){
                    foreach($datos as $row){
                        $output["ID"]=$row["ID"];
                        $output["NumStand"]=$row["NumStand"];
                        $output["DueStand"]=$row["DueStand"];
                        $output["NumCelular"]=$row["NumCelular"];
                        $output["EstStand"]=$row["EstStand"];  
                        $output["UbiStand"]=$row["UbiStand"];      
                    }
                    echo json_encode($output);
                }
                break; 
                case "eliminar":
                    $registros->delete_registro($_POST["ID"]);
                    break;
}

?>