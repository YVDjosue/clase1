<?php
// nombre_bisiesto($anio)
// nombre_factorial($n)
// nombre_esMayorDeEdad($edad)
// nombre_saludame($nombre)
// nombre_obtenerPromedio()

//JOSUE

//JUACKO
function juacko_bisiesto($age)
{
  if ($age % 4 == 0) {
    if ($age % 100 == 0) {
    }
  }
}
//LALO

function lalo_bisiesto($anio){
    if($anio % 4== 0){ 
        if($anio % 100== 0){
            if($anio % 400== 0){
                echo "Es año bisiesto";
            }else{
                echo "Es año normal";
            }
        }else{
            echo "Es año bisiesto";
        }
    }else{
        echo "Es año normal";
    }
    
    return $anio;
}
lalo_bisiesto(2000);
echo "<br>";
echo"<br>";
function lalo_factorial($n){
    $f=1;
    for ($i=1; $i<=$n; $i++){
            $f=$f*$i;
    }echo "El factoria de $n es: $f";
    
    return $n;
}

lalo_factorial(5);

echo "<br>";
echo"<br>";
function lalo_esMayorDeEdad($edad){
    if($edad>18){
        echo "Es mayor de edad";
    }else{
        echo "No es mayor de edad";
    }
    return $edad;
}

lalo_esMayorDeEdad(17);

echo "<br>";
echo"<br>";

function lalo_saludame($nombre) {
    echo "Hola, " . $nombre . "!";
    return $nombre;
}

lalo_saludame("Lalo");
echo "<br>";
echo"<br>";

?>


<?php

// Definición de la función
?>

<?php
//Hola chicos


//RAF
