
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>

<header> <?php require_once('header.php'); ?> </header>
<br>

<div class="container mt-5">


        <form action="register.php" method="post" class="offset-md-3 col-md-6">

            <h1 class="text-center">Ingresa los datos del Paciente</h1>

            <br>

            <div class="row mb-2">

                <div class="col-md-6">
                    <input type="text" name="name" placeholder="Nombre" class="form-control" required>
                </div>

                <div class="col-md-6">
                    <input type="text" name="lastname" placeholder="Apellido" class="form-control" required>
                </div>

            </div>
            
            
            <div class="row mb-2">

                <div class="col-md-6">
                    <input type="number" name="age" placeholder="Edad" class="form-control" required>
                </div>

                <div class="col-md-6">
                    <input type="email" name="email" placeholder="Email" class="form-control" required>
                </div>
            </div>

            <div class="mb-2">
                <input type="text" name="address" placeholder="Direccion" class="form-control" required>
            </div>

            <div class="row mb-2">

                <div class="col-md-6">
                    <input type="number" name="azucar" placeholder="Azucar" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <input type="number" name="hemoglobina" placeholder="Hemoglobina" class="form-control" required>
                </div>

            </div>

            <div class="row mb-2">

                <div class="col-md-6">
                    <input type="number" name="colesterol" placeholder="Colesterol" class="form-control" required>
                </div>

                <div class="col-md-6">
                    <input type="number" name="trigliceridos" placeholder="Trigliceridos" class="form-control" required>
                </div>

            </div>

            <br>

            <input type="submit" name="register" class="btn btn-success btn-lg btn-block " value="Enviar">
    
        </form>

        <footer> <?php require_once('footer.php'); ?> </footer>

</div>
    <?php
        include("register.php");
    ?>
</body>
</html>