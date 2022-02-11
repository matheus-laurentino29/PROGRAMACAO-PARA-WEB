<?php

    $nome = $_POST['name'];
    $sobrenome = $_POST['sobrenome'];
    $rg = $_POST['rg'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];

    echo "Seu nome é " . $nome . " " . $sobrenome . "<br>";
    echo "Seu RG é: " . $rg . "<br>";
    echo "Seu CPF é " . $senha . "<br>";

    if(isset($_POST['hobbes'])) {
        echo "Os Hobbes escolhidos foram: <br/>";
        foreach($_POST['hobbes'] as $hobbes) {
            echo $hobbes . "<br>";
        }
    }else {
        echo "Nenhuma Hobbe escolhido!<br/>";
    }

    echo "<br>";

    if(isset($_POST['carros'])) {
        echo "Os carros escolhidos foram: <br/>";
        foreach($_POST['carros'] as $carros) {
            echo $carros . "<br>";
        }
    }else {
        echo "Nenhum carro escolhido!<br/>";
    }
?>
