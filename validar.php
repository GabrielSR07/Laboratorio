
<?php

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    session_start();
    $_SESSION['user'] = $user;

    include('db.php');

    $consulta = "SELECT * FROM users where user = '$user' and pass = '$pass'";

    $resultado = mysqli_query($conexion, $consulta);

    $filas = mysqli_num_rows($resultado);

    if (!empty($filas)) {
        header("location:home.php");
        }  
         else {
                ?>
                <?php   
                    include("login.php");
                ?>
                    <style>
                    #alert {  border: thin red 1px;
                            background: rgba(252, 128, 128, 0.856);
                            width: 80vw;
                            margin: auto;}
                        

                    </style>
                <h2 class="text-center" id="alert">Ha ocurrido un error en la autentificación</h2>

                <?php
                }

    mysqli_free_result($resultado);
    mysqli_close($conexion);

?>
