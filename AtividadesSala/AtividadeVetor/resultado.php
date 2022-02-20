<?php
    
    function montarArray(){
        $x = 0;
        for ($x; $x < 3; $x++){
            $arr[$x] = rand(1,10);
        }
        return $arr;
    }

    function multiplicador($arr1,$arr2){
        $x = 0;
        for($x; $x < 3; $x++){
            $arr3[$x] = $arr1[$x]*$arr2[$x];
        }
        return $arr3;
    }

    function mostrarArrays($arr1,$arr2){
        $y = 0;
        echo "Array 1: \n";
        for($y; $y < count($arr1); $y++){
            echo $arr1[$y] . "\n";
        }

        echo "\n" . "<br>";

        $y = 0;
        echo "Array 2: \n";
        for($y; $y < count($arr2); $y++){
            echo $arr2[$y] . "\n";
        }
    }

    function mostrarResultados($resultados){
        $y = 0;
        echo "<br>" . "Resultados: \n";
        for($y; $y < count($resultados); $y++){
            echo $resultados[$y] . "\n";
        }
    }

    $array1 = montarArray();
    $array2 = montarArray();
    $resultados = multiplicador($array1, $array2);
    
    mostrarArrays($array1, $array2);
    echo "\n";
    mostrarResultados($resultados);  
      
?>