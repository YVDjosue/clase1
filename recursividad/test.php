<?php
//n=5

// ITERATIVO
function fibonacciIterative($n){  
    $x1=1;
    $x2=1;
    //$n=redline("Ingresa el valor de n:");
    for($i=1; $i<=$n; $i++){
        if($i==1){
            echo $x1;
        }
        if($i==2){
            echo " - ".$x2;
        }
        if($i>=3){
            $x3=$x1+$x2;
            echo " - ".$x3;
            $x1=$x2;
            $x2=$x3;
        }
    }
}

//RECURSIVO
//devuelve solo el termino n de la serie de fibonacci, ejm: n=6 devuelve 8
function fibonacciR($n){
    if($n==1||$n==2){
        return 1;
    }else{
        return fibonacciR($n-1)+fibonacciR($n-2);
    }
}

//devuelve la serie de fibonacci hasta el termino n, ejm: n=6 devuelve 1 1 2 3 5 8
function fibonacciRecursive($n){
    for($i=1; $i<=$n; $i++){
        echo fibonacciR($i)." - ";
    }
}


function hanoi($n, $a, $b, $c){
    if($n==1){
        echo "Mover disco de $a a $c <br>";
        return;
    }else{
        hanoi($n-1, $a, $c, $b);
        echo "Mover disco de $a a $c <br>";
        hanoi($n-1, $b, $a, $c);
    } 
}


//PRUEBA
$n = $_POST['name'];   
$inicio = microtime(true); 

fibonacciRecursive($n);

$fin = microtime(true);
$tiempo_ejecucion = $fin - $inicio;
echo "<br>El proceso tardó: " . $tiempo_ejecucion . " segundos.";