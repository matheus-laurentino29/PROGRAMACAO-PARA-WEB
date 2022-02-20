<?php

    session_start();

    if(isset($_POST['numero'])) {
        $numero = $_POST['numero'];
        $x = 1;
        while($x <= 10){
            echo $numero . "x" . $x . " = " . $numero*$x . "<br>";
            $x = $x + 1;
        }                  
        
    }

    session_destroy(); 
?>