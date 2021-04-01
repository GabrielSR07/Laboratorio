<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <header> <?php require_once('header.php'); ?> </header>

    <div id="form">

        <form action="validar.php" method="POST" class="offset-md-3 col-md-6">

            <h1 class="text-center">Login</h1>

            <p>
            <label>Username:</label>
            <input type="text" id="user" name="user" class="form-control" placeholder="username" required />
            </p>

            <p>
            <label>Password:</label>
            <input type="password" id="pass" name="pass" class="form-control" placeholder="password" required/>
            </p>

            <input type="submit" class="btn btn-success btn-lg btn-block" value="Login" />

        </form>
    
    </div>

    <footer> <?php require_once('footer.php'); ?> </footer>
    
</body>
</html>