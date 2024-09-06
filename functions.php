<?php
// nombre_bisiesto($anio)
// nombre_factorial($n)
// nombre_esMayorDeEdad($edad)
// nombre_saludame($nombre)
// nombre_obtenerPromedio()

//JOSUE

///                               JUACKO

// Función para verificar si un año es bisiesto
function esBisiesto($anio)
{
  // Un año es bisiesto si es divisible por 4
  // Pero si es divisible por 100, no es bisiesto a menos que también sea divisible por 400
  return ($anio % 4 == 0 && $anio % 100 != 0) || ($anio % 400 == 0);
}

// Array con años de ejemplo
$anios = [2000, 2001, 2004, 2100, 2200, 2300, 2400, 2020, 2024, 2025];

echo "Años bisiestos entre los años de ejemplo:\n";

foreach ($anios as $anio) {
  if (esBisiesto($anio)) {
    echo "$anio es un año bisiesto.\n";
  } else {
    echo "$anio no es un año bisiesto.\n";
  }
}
//Funcion para calcular el factorial de un numero
function factorial($numero)
{
  if ($numero < 0) {
    return "El factorial no está definido para números negativos.";
  }
  $resultado = 1;
  for ($i = 1; $i <= $numero; $i++) {
    $resultado *= $i;
  }
  return $resultado;
}

// Ejemplo de uso
$numero = 5;
echo "El factorial de $numero es: " . factorial($numero) . "\n";
echo "El factorial de 10 es: " . factorial(4) . "\n";

// nombre_esMayorDeEdad($edad)

/**
 * Determina si una edad es mayor de edad o no.
 *
 * @param integer $edad La edad a verificar.
 *
 * @return boolean True si la edad es mayor de edad, false de lo contrario.
 */
function esMayorDeEdad($edad)
{
  return $edad >= 18;
}

// Ejemplo de uso

$edad = 17;
echo esMayorDeEdad($edad) ? "$edad es mayor de edad.\n" : "$edad no es mayor de edad.\n";

// nombre_saludame($nombre)
function saludame($nombre)
{
  echo "Hola, Bienvenido a Dota 2 : $nombre" . "\n";
}

// Ejemplo de uso
saludame("Juacko");

// nombre_obtenerPromedio()
$notas = [7, 8, 9, 10];
/**
 * Calcula el promedio de un array de n meros.
 *
 * @param array $notas El array de n meros a promediar.
 *
 * @return float El promedio de los n meros.
 */
function obtenerPromedio($notas)
{

  return array_sum($notas) / count($notas);
}

// Ejemplo de uso

$promedio = obtenerPromedio($notas);
echo "El promedio es: $promedio\n";
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
"<br>";
"<br>";
function lalo_factorial($n){
    $f=1;
    for ($i=1; $i<=$n; $i++){
            $f=$f*$i;
    }echo "El factoria de $n es: $f";
    
    return $n;
}

lalo_factorial(5);


function lalo_esMayorDeEdad($edad){
    if($edad>18){
        echo "Es mayor de edad";
    }else{
        echo "No es mayor de edad";
    }
    return $edad;
}

lalo_esMayorDeEdad(17);


function lalo_saludame($nombre) {
    echo "Hola, " . $nombre . "!";
    return $nombre;
}

lalo_saludame("Lalo");

function lalo_obtenerPromedio($n){
        $prom=1;
    for ($i= 1; $i<=$n; $i++){
        $prom=$i/$n;
        echo "El promedio de "
    }
    return  $prom;
}

lalo_obtenerPromedio("3");
?>


<?php

// Definición de la función
?>

<?php
//Hola chicos


//RAF
