<?php

    session_start();

    if(isset($_POST['nota1'])) {
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];
        $nota4 = $_POST['nota4'];
        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
        $x = 1;

        echo "A mádia das suas notas: " . "<br>";
        echo $nota1 . "<br>";  
        echo $nota2 . "<br>";  
        echo $nota3 . "<br>";  
        echo $nota4 . "<br>";                  
        echo "É de: " . $media;    
    }

    session_destroy(); 
?>