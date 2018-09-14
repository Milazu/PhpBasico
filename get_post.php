<?php
    if(isset($_GET["name"])){
        echo '$_GET<br>';
        $nombre = htmlentities($_GET["name"]);
        $email = htmlentities($_GET["email"]);
        echo $nombre;
        echo "<br>";
        echo $email;
        echo "<br>";
    }
    if(isset($_POST["name"])){
        echo '$_POST<br>';
        $nombre = htmlentities($_POST["name"]);
        $email = htmlentities($_POST["email"]);
        echo $nombre;
        echo "<br>";
        echo $email;
        echo "<br>";
    }
    ///$_REQUEST ES TANTO GET COMO POST
    if(isset($_REQUEST["name"])){
        echo '$_REQUEST<br>';
        $nombre = htmlentities($_REQUEST["name"]);
        $email = htmlentities($_REQUEST["email"]);
        echo $nombre;
        echo "<br>";
        echo $email;
        echo "<br>";
    }
    
    echo "QUERY_STRING:<br>";
    echo $_SERVER["QUERY_STRING"];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Naiss</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

<form method="GET" action="get_post.php">
    <h3>GET METHOD</h3>
    <div>
        <label for="">Nombre</label><br>
        <input type="text" name="name">
    </div>
    <div>
        <label for="">Email</label><br>
        <input type="text" name="email">
    </div>
    <input type="Submit">
</form>
<form method="POST" action="get_post.php">
    <h3>POST METHOD</h3>
    <div>
        <label for="">Nombre</label><br>
        <input type="text" name="name">
    </div>
    <div>
        <label for="">Email</label><br>
        <input type="text" name="email">
    </div>
    <input type="Submit">
</form>
    
</body>
</html>