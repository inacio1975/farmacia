<?php

class conexion
{
    private $servidor = "localhost";
    private $db = "faramaciasistema";
    private $puerto = 3306;
    private $charset = "utf8";
    private $usuario = "root";
    private $contrasena = "";
    public $pdo = null;
    //private $atributos=array(PDO::ATTR_CASE->PDO::CASE_LOWER,PDO::ATTR_ERRMODE->PDO::ERRMODE_EXCEPTION,PDO::ATTR_ORACLE_NULLS->PDO::NULL_EMPTY_NULLS,PDO::ATTR_DEFAULT_FETCH_MODE->PDO::FETCH_OBJ);
    function __construct()
    {
        $this->pdo = new PDO("mysql:dbname={$this->db};host={$this->servidor};port={$this->puerto};charset={$this->charset}", $this->usuario, $this->contrasena);
        $this->pdo->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    }
}
