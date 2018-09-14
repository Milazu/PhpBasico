<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php

    #CONDICIONALES

    /* 

        ==
        ===
        <
        >
        <=
        >=
        !=
        !==

        OPERADORES LÓGICOS:

        and &&
        or  ||
        xor !

    */

        #SWITCH

    $FavColor = "Rojo";

    switch($FavColor){
        case "rojo":
            echo "Tu color es colorado";
            break;
        case "otro":
            echo "Tu color es otro";
            break;
        default:
            echo "por defecto";
            break;
    }



?>
</body>
</html>