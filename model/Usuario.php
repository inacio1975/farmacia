<?php
include_once 'Conexion.php';
class Usuario{
    var $objectos;
    public function __construct(){
        $db = new conexion();
        $this->accesso = $db->pdo;
    }

    function loguearse($dni, $pass){
        $sql = "SELECT * FROM usuario INNER JOIN tipo_us ON us_tipo=id_tipo_us WHERE dni_us=:dni AND contrasena_us=:pass";
        $query = $this->accesso->prepare($sql);
        $query->execute(array(':dni' => $dni, ':pass' => $pass));
        $this->objectos = $query->fetchAll();
        return $this->objectos;
    }
}
?>