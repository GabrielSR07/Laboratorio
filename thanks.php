<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gracias <?php echo $_GET['name']; ?></title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
</head>
<body>

<header> <?php require_once('header.php'); ?> </header>

<div class="container mt-5 text-center">

<h1>Gracias <?php echo $_GET['name']; ?>!</h1>
<p>Los resultados de tu prueba han sido enviados a tu correo.</p>

</div>

<footer> <?php require_once('footer.php'); ?> </footer>
    
    
</body>
</html>