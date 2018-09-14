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
    
    class Persona{
        private $nombre;
        private $email;
        private static $maxEdad = 87;

        public function getNombre(){
            return $this->nombre;
        }
        public function getEmail(){
            return $this->email;
        }
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        public function setEmail($email){
            $this->email = $email;
        }

        public function __construct($nombre,$email){
            echo __CLASS__." creada<br>";
            $this->setNombre($nombre);
            $this->setEmail($email);
        }

        public function __destruct(){
            echo __CLASS__." destruida<br>";
        }

        public static function getMaxEdad(){
            return self::$maxEdad;
        }
    }

    $persona1 = new Persona("Nigro","Mante");
    //$persona1->setNombre("Nigro");
    //$persona1->setEmail("Mante");

    echo $persona1->getNombre();
    echo $persona1->getEmail();

    print("<br><br>");

    class Cliente extends Persona{
        private $balance;

        public function __construct($nombre,$email,$balance){
            parent::__construct($nombre,$email,$balance);
            echo __CLASS__." creada<br>";
            $this->setNombre($nombre);
            $this->setEmail($email);
            $this->setBalance($balance);
        }

        public function getBalance(){
            return $this->balance;
        }
        public function setBalance($balance){
            $this->balance = $balance;
        }
    }

    $Cliente1 = new Cliente("Nigro","Maentie",45);

    echo $Cliente1->getBalance();

    print("<br>");

    echo Persona::getMaxEdad();
    print("<br>");

?>
    
</body>
</html>