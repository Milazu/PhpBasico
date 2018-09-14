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

<?php

    $loggedIn = true;
    $arr = [12,234,34,12,43];

    /*
    if($loggedIn){
        echo "you are logged in";
    }else{
        echo "You are not logged in";
    }

    echo ($loggedIn) ? "you are logged in" : "You are not logged in";

    $age = 20;
    $score = 15;

    echo "Your score is: ".($score > 10 ? ($age > 10 ? "Average" :
        "Exceptional"):($age > 10 ? "Horrible":"Average"));
    */

?>
<div>
    <?php if($loggedIn){ ?>
        <h1>Welcome User</h1>
    <?php } else{ ?>
        <h1>Welcome Guest</h1>
    <?php } ?>
</div>
<div>
<?php if($loggedIn): ?>
    <h1>Welcome User</h1>
    <?php else: ?>    
    <h1>Welcome Guest</h1>
<?php endif; ?>
</div>

<div>
<?php foreach($arr as $val): ?>
    <?php echo $val; ?>
<?php endforeach;?>
</div>
    
</body>
</html>