<?php
    //check post data
    if(filter_has_var(INPUT_POST, "data")){
        echo "Data Found";
    }else{
        echo "No Data";
    }

    print("<br>");

    if(filter_has_var(INPUT_POST, "data")){
        $email = $_POST["data"];

        // quitar carácteres ilegales

        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        echo $email."<br>";

        if(filter_input($email, FILTER_VALIDATE_EMAIL)){
            echo "Valid Email";
        }else{
            echo "Invalid Email";
        }

    }

?>




<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="data">
    <button type="submit">Submit</button>
</form>





