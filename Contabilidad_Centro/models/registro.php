<?php
   require_once("../Guardar_PHP/conexion.php");

class registro extends Conectar{

    public function listar_registro(){
        $conectar=parent::conexion();
        parent::set_names();
        $sql="SELECT * FROM registrar_stand";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
    public function update_registro($ID,$NumStand,$DueStand,$NumCelular,$EstStand,$UbiStand){
        $conectar=parent::conexion();
        parent::set_names();
        $sql="update registrar_stand set
        NumStand=?,
        DueStand=?,
        NumCelular=?,
        EstStand=?,
        UbiStand=?
        where ID=?
        ";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$NumStand);
        $sql->bindValue(2,$DueStand);
        $sql->bindValue(3,$NumCelular);
        $sql->bindValue(4,$EstStand);
        $sql->bindValue(5,$UbiStand);
        $sql->bindValue(6,$ID);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
    public function delete_registro($ID){
        $conectar=parent::conexion();
        parent::set_names();
        $sql="DELETE  FROM registrar_stand  where ID=?"; 
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$ID);         
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

    public function get_registro_x_id($ID){
        $conectar=parent::conexion();
        parent::set_names();
        $sql="SELECT * FROM registrar_stand where ID=? "; 
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$ID);         
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
    public function insert_registro($NumStand,$DueStand,$NumCelular,$EstStand,$UbiStand){
        $conectar=parent::conexion();
        parent::set_names();
        $sql="INSERT INTO registrar_stand (NumStand, DueStand, NumCelular, EstStand, UbiStand)values
        (?,?,?,?,?);";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$NumStand);
        $sql->bindValue(2,$DueStand);
        $sql->bindValue(3,$NumCelular);
        $sql->bindValue(4,$EstStand);
        $sql->bindValue(5,$UbiStand);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
    
}
?>