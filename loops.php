<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

    <?php
    //BUCLES:
    /*
        For
        While
        Do While
        Foreach
    */

    # For Loop

    for ($i=0; $i <= 10; $i++) { 
        echo $i;
        echo ("<br>");
    }

    # While

    $i = 0;
    while($i < 10){
        echo $i;
        $i++;
    }

    # Do while

    $i = 0;

    do{
        echo "<br>";
        echo $i;
        echo "<br>";
        $i++;
    }while($i > 1);

    # foreach

    $people = array("as" => "as@gmial.ew", "asda" => "asd@as", "asdasd" => "asd@sdsd.ww");

    foreach($people as $person => $email){
        echo "$person - $email";
        echo "<br>";
    }



    ?>

    
</body>
</html>