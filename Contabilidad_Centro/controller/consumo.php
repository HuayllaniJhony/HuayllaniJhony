<?php
require_once("../Guardar_PHP/conexion.php");
require_once("../models/Consumo.php");
$consumos= new Consumo();

switch($_GET["op"]){
    case "guardaryeditar":
        if (empty($_POST["ID"])) {
            $consumos->insert_consummo($_POST["NumStand"],$_POST["DueStand"],$_POST["NoPagoLuz"],$_POST["ConEner"]);
        }else {
                $consumos->update_consumo($_POST["ID"],$_POST["NumStand"],$_POST["DueStand"],$_POST["NoPagoLuz"],$_POST["ConEner"]);
        }
        break;

    case "listar":
        $datos=$consumos->listar_consumo();
            $data=Array();
            foreach($datos as $row){
                $sub_array = array();
                $sub_array[]=$row["NumStand"];
                $sub_array[]=$row["DueStand"];
                $sub_array[]=$row["NoPagoLuz"];
                $sub_array[]=$row["ConEner"];
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
                $datos=$consumos->get_consumo_x_id($_POST["ID"]);
                if(is_array($datos)==true and count($datos)>0){
                    foreach($datos as $row){
                        $output["ID"]=$row["ID"];
                        $output["NumStand"]=$row["NumStand"];
                        $output["DueStand"]=$row["DueStand"];
                        $output["NoPagoLuz"]=$row["NoPagoLuz"];
                        $output["ConEner"]=$row["ConEner"];      
                    }
                    echo json_encode($output);
                }
                break; 
                case "eliminar":
                    $consumos->delete_consumo($_POST["ID"]);
                    break;
}

?>