<<!DOCTYPE html>
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
    

<?php
    #Array - Variable que guarda multiples valores
    /*
        -Indexadas
        -Asociativas
        -Multidimensionales
    */

    //Indexadas:

    $gente = array('Negro', 'Smitho', 'Faker');

    $ids = array(34, 73, 92); 

    $coches = ['rxjs', 'Bueno en verdad no es un coche'];

    $coches[3] = 'Such nice easy brasss'; //Lo agrega en un indice concreto
    $coches[] = 'Añade al ultimo libre';

    //echo $gente[1];
    //echo $ids[2];
    //echo $coches[4];

    //echo count($coches);

    //Debugging
    //print_r($coches); //Hace un echo de todo el array
    //var_dump($coches); //Igual que print_r pero con los datatypes
    //

    //Arrays Asociados

    $asociado = array('clave' => 'valor', 'a' => 1, 'b' => 2);

    echo $asociado[0];
    echo $asociado['clave'];

    $asociado["nueva clave"] = " NEGROIDE";
    echo $asociado['nueva clave'];

    echo "  pls";

    //Arrays multidimensionales

    $coches = array(
        array("Honda", 20, 10),
        array("Mazda", 74, 12),
        array("Citroen", 86, 45),
    );

        echo $cars[1][0]; // Mazda
        echo $cars[1][2]; // 12

?>
</body>
</html>