<?php
class Conectar{
    protected $dbh;

    protected function Conexion(){
        try {
            //Conexion con la base de datos
            $conectar=$this->dbh= new PDO("mysql:local=localhost;dbname=centrocomercialsl","root","");
            return $conectar;
        } catch (Exception $e) {
            print "¡Error de conexion".$e->getMessage()."<br/>";
            die();
            //throw $th;
        }
        
    }
    //para no tener errores de mayuscula y menuscula
    public function set_names(){
        return $this->dbh->query("SET NAMES 'utf8'");
    }
    //para validar la ruta
    public static function ruta(){
        return "http://localhost:8080/Contabilidad_Centro/";
    }
    
}
?>