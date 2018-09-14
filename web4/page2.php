<?php
    session_star();

    $name = $_SESSION["name"];
    $email = $_SESSION["email"];


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
Maromos
    <h5>Gracias <?php echo $name;  ?> por ser tan guaposon.</h5>
    <br>
    <h6>Tu sesion dice que el email es: <?php echo $email; ?></h6>
    <a href="./page3">Ir a la siguiente página</a>
</body>
</html>