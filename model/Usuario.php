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

    function obtenerDatos($id){
        $sql = "SELECT * FROM usuario INNER JOIN tipo_us ON us_tipo=id_tipo_us AND id_usuario=:id";
        $query = $this->accesso->prepare($sql);
        $query->execute(array(':id' => $id));
        $this->objectos = $query->fetchAll();
        return $this->objectos;
    }

    function actualizarUsuario($id_usuario, $telefone, $endereco, $email, $sexo, $adicional){
        $sql = "UPDATE usuario SET telefono_us=:telefono, residencia_us=:residencia, correo_us=:email, sexo_us=:sexo,adicional_us=:adicional WHERE id_usuario=:id";
        $query = $this->accesso->prepare($sql);
        $query->execute(array(':id' => $id_usuario, ':telefono' => $telefone, ':residencia' => $endereco, ':email' => $email, ':sexo' => $sexo, ':adicional' => $adicional));

    }
}
?>