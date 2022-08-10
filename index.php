
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/fontawesome/all.min.css">
</head>

<?php

session_start();
if(!empty($_SESSION['us_tipo'])) {
    header("Location: ./controller/LoginController.php");
}else{
    session_destroy();
?>    
<body>
    <img class="wave" src="./assets/img/wave.png" alt="wave">
    <div class="contenedor">
        <div class="img">
            <img src="./assets/img/bg.svg" alt="doctors">
        </div>
        <div class="contenido-login">
            <form action="./controller/LoginController.php" method="POST">
                <img src="./assets/img/logo.png" alt="" />
                <h2>Farmácia</h2>
                <div class="input-div dni">
                    <div class="i"><i class="fas fa-user"></i></div>
                    <div class="div">
                        <h5>DNI</h5>
                        <input type="text" name="user" id="user" class="input" />
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i"><i class="fas fa-lock"></i></div>
                    <div class="div">
                        <h5>Contrasenha</h5>
                        <input type="password" name="pass" id="pass" class="input">
                    </div>
                </div>
                <a href="">Created warplace</a>
                <input type="submit" class="btn" value="Iniciar Seção">
            </form>
        </div>
    </div>

    <script src="./assets/js/login.js"></script>
</body>
<?php 

}

?>

?>
</html>