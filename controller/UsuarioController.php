<?php
include_once '../model/Usuario.php';
$usuario = new Usuario();

if($_POST["funcion"] == 'buscar_usuario'){
    $usuario->obtenerDatos($_POST["dato"]);
    $json = array();
    foreach ($usuario->objectos as $objecto) {
        $json[] = array(
            'nombre' => $objecto->nombre_us,
            'apellidos' => $objecto->apellidos_us,
            'edad' => $objecto->edad,
            'dni' => $objecto->dni_us,
            'tipo' => $objecto->nombre_tipo,
            'telefono' => $objecto->telefono_us,
            'residencia' => $objecto->residencia_us,
            'correo' => $objecto->correo_us,
            'sexo' => $objecto->sexo_us,
            'adicional' => $objecto->adicional_us
        );
    }
   echo json_encode($json[0]);
}
if($_POST["funcion"] == 'capturar_datos'){
    $usuario->obtenerDatos($_POST["dato"]);
    $json = array();
    foreach ($usuario->objectos as $objecto) {
        $json[] = array(
            'telefono' => $objecto->telefono_us,
            'residencia' => $objecto->residencia_us,
            'correo' => $objecto->correo_us,
            'sexo' => $objecto->sexo_us,
            'adicional' => $objecto->adicional_us
        );
    }
   echo json_encode($json[0]);
}

if($_POST["funcion"] == 'editar_usuario'){
    $id_usuario = $_POST['dato']["id_usuario"];
    $telefone = $_POST['dato']["telefone"];
    $endereco = $_POST['dato']["endereco"];
    $email = $_POST['dato']["email"];
    $sexo = $_POST['dato']["sexo"];
    $adicional = $_POST['dato']["adicional"];
    
    $usuario->actualizarUsuario($id_usuario, $telefone, $endereco, $email, $sexo, $adicional);

    echo json_encode(array('mensagem' => "Sucesso", "codigo" => 201));
}


?>