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
echo("Php funcionando!");

#Comentario con   ##
//Comentario estandar
/* 

*/

    #VARIABLES
    /*  - Prefijo $
        -empezar con letra o _
        - solo letras numeros y _
        -Case sensitive
    */

    #DATA TYPES
    /*
    String
    Integer
    floats  - decimal
    Boolean
    Arrays
    Objetos
    NULL
    Resource(en realidad no es un tipo de dato)

    */

    $output = "Hello World!";

    echo $output;

    $num1 = 4;
    $num2 = 10;
    $suma = $num1 + $num2;

    echo "<br>";

    echo ("$num1 + $num 2 = $suma");

    $string = 'They\'re Here';

    echo ($string);
    echo "<br>EE";

    define('SALUDO', 'Hola a Todos');

    echo SALUDO;



    
?>


</body>
</html>