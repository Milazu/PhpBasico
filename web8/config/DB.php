<?php

    //Crear conexion

                            //url ,usuario, password, nombre DB
    $conn = mysqli_connect("localhost","root",null,"phpblog");

    //Check conexion
    if(mysqli_connect_errno()){
        //Conexion flla
        echo ("Error al intentar conectar a MYSQL " . mysqli_connect_errno());
    }

//Crear quer
$query = "SELECT * FROM posts";

//Get resultado      conexion y query
$result = mysqli_query($conn,$query);

//FecthData                   Como un array asociativo
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //print_r($posts);

//Liberar Result --->  Lo elimina de la memoria
mysqli_free_result($result);

//Cerrar conexión
mysqli_close($conn);

    ?>