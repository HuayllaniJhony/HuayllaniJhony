<?php
   require_once("../Guardar_PHP/conexion.php");

class consumo extends Conectar{

    public function listar_consumo(){
        $conectar=parent::conexion();
        parent::set_names();
        $sql="SELECT * FROM consumo_energia";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
    public function update_consumo($ID,$NumStand,$DueStand,$NoPagoLuz,$ConEner){
        $conectar=parent::conexion();
        parent::set_names();
        $sql="update consumo_energia set
        NumStand=?,
        DueStand=?,
        NoPagoLuz=?,
        ConEner=?
        where ID=?
        ";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$NumStand);
        $sql->bindValue(2,$DueStand);
        $sql->bindValue(3,$NoPagoLuz);
        $sql->bindValue(4,$ConEner);
        $sql->bindValue(5,$ID);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
    public function delete_consumo($ID){
        $conectar=parent::conexion();
        parent::set_names();
        $sql="DELETE  FROM consumo_energia  where ID=?"; 
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$ID);         
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

    public function get_consumo_x_id($ID){
        $conectar=parent::conexion();
        parent::set_names();
        $sql="SELECT * FROM consumo_energia where ID=? "; 
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$ID);         
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
    public function insert_consummo($NumStand,$DueStand,$NoPagoLuz,$ConEner){
        $conectar=parent::conexion();
        parent::set_names();
        $sql="INSERT INTO consumo_energia(NumStand, DueStand, NoPagoLuz, ConEner)values
        (?,?,?,?);";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$NumStand);
        $sql->bindValue(2,$DueStand);
        $sql->bindValue(3,$NoPagoLuz);
        $sql->bindValue(4,$ConEner);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
    
}
?>