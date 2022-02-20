<?php

    session_start();

    if(isset($_POST['nome']) && isset($_POST['peso']) && isset($_POST['altura'])) {
        $nome = $_POST['nome'];
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];
        $resultado = $peso / ($altura * $altura);
        
        echo "Olá " . $nome . "<br>";

        if($resultado < 18.5){
            echo "Seu IMC de ". number_format($resultado,1) . "é considerado Baixo.";
        }
        elseif($resultado >= 18.5 && $resultado <= 24.9){
            echo "Seu IMC de ". number_format($resultado,1) . " é considerado Normal.";
        }
        elseif($resultado >= 25 && $resultado <= 29.9){
            echo "Seu IMC de ". number_format($resultado,1) . "é considerado Sobrepeso.";
        }
        elseif($resultado >= 30 && $resultado <= 34.9){
            echo "Seu IMC de ". number_format($resultado,1) . " é considerado Obesidade Grau 1.";
        }
        elseif($resultado >= 35 && $resultado <= 39.9){
            echo "Seu IMC de ". number_format($resultado,1) . " é considerado Obesidade Grau 2.";
        }
        else{
            echo "Seu IMC de ". number_format($resultado,1) . " é considerado Obesidade Grau 3 ou Mórbida.";
        }
                   
        
    }

    session_destroy(); 
?>