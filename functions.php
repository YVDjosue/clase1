<?php
// nombre_bisiesto($anio)
// nombre_factorial($n)
// nombre_esMayorDeEdad($edad)
// nombre_saludame($nombre)
// nombre_obtenerPromedio()

//JOSUE
function josue_evaluaBisiesto($anio){
    if (josue_esBisiesto($anio)){
        echo "El año es bisiesto";
    }else{
        echo "El año no es bisiesto";
    }
}

function josue_esBisiesto($anio)
{
  if ($anio % 4 == 0) {
    if ($anio % 100 == 0) {
      if ($anio % 400 == 0) {
        return true;
      } else {
        return false;
      }
    } else {
      return true;
    }
  } else {
    return false;
  }
}

function josue_factorial($n)
{
  if ($n < 0) {
    return 0;
  } else {
    $rpta = 1;
    for ($i = 1; $i <= $n; $i++) {
      $rpta = $rpta * $i;
    }
    return $rpta;
  }
}

function josue_esMayorDeEdad($edad)
{
  if ($edad >= 18) {
    echo "Es mayor de edad";
  } else {
    echo "No es mayor de edad";
  }
}

function josue_saludame($nombre)
{
  echo "Hola, " . $nombre . " como estas?";
}

function josue_obtenerPromedio($numeros)
{
  $suma = 0;
  $cant = count($numeros);
  for ($i = 0; $i < $cant; $i++) {
    $suma += $numeros[$i];
  }
  return $suma / $cant;
}



///                               JUACKO
// Función para verificar si un año es bisiesto
function juacko_esBisiesto($anio)
{
  // Un año es bisiesto si es divisible por 4
  // Pero si es divisible por 100, no es bisiesto a menos que también sea divisible por 400
  return ($anio % 4 == 0 && $anio % 100 != 0) || ($anio % 400 == 0);
}
function juacko_evaluaBisiesto($anio)
{
  if (juacko_esBisiesto($anio)) {
    echo "$anio es un año bisiesto.\n";
  } else {
    echo "$anio no es un año bisiesto.\n";
  }
}
//Funcion para calcular el factorial de un numero
function juacko_factorial($numero)
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

// nombre_esMayorDeEdad($edad)

/**
 * Determina si una edad es mayor de edad o no.
 *
 * @param integer $edad La edad a verificar.
 *
 * @return boolean True si la edad es mayor de edad, false de lo contrario.
 */
function juacko_esMayorDeEdad($edad)
{
  return $edad >= 18;
}

/**
 * Evalua si una edad es mayor de edad o no.
 *
 * @param int $age La edad a verificar.
 *
 * @return string Un mensaje indicando si la edad es mayor de edad o no.
 */
function juacko_evaluaMayorDeEdad($age)
{
  if (juacko_esMayorDeEdad($age)) {
    echo "$age es mayor de edad.\n";
  } else {
    echo "$age no es mayor de edad.\n";
  }
}
// nombre_saludame($nombre)
function juacko_saludame($nombre)
{
  echo "Hola, Bienvenido a Dota 2 : $nombre" . "\n";
}


// nombre_obtenerPromedio()
$notas = [7, 8, 9, 10];
/**
 * Calcula el promedio de un array de n meros.
 *
 * @param array $notas El array de n meros a promediar.
 *
 * @return float El promedio de los n meros.
 */
function juacko_obtenerPromedio($notas)
{

  return array_sum($notas) / count($notas);
}


//funcion para saber el promedio de 0 hasta n, de un numero n dado
function juacko_calcularPromedio($numero)
{
  $suma = 0;
  for ($i = 1; $i <= $numero; $i++) {
    $suma += $i;
  }
  return $suma / $numero;
}



//LALO

function lalo_bisiesto($anio)
{
  if ($anio % 4 == 0) {
    if ($anio % 100 == 0) {
      if ($anio % 400 == 0) {
        echo "Es año bisiesto";
      } else {
        echo "Es año normal";
      }
    } else {
      echo "Es año bisiesto";
    }
  } else {
    echo "Es año normal";
  }

  return $anio;
}
lalo_bisiesto(2000);

echo "<br>";
echo "<br>";
function lalo_factorial($n)
{
  $f = 1;
  for ($i = 1; $i <= $n; $i++) {
    $f = $f * $i;
  }
  echo "El factoria de $n es: $f";

  return $n;
}

lalo_factorial(5);

echo "<br>";
echo "<br>";
function lalo_esMayorDeEdad($edad)
{
  if ($edad > 18) {
    echo "Es mayor de edad";
  } else {
    echo "No es mayor de edad";
  }
  return $edad;
}

lalo_esMayorDeEdad(17);

echo "<br>";
echo "<br>";

function lalo_saludame($nombre)
{
  echo "Hola, " . $nombre . "!";
  return $nombre;
}

lalo_saludame("Lalo");
echo "<br>";
echo "<br>";

function lalo_obtenerPromedio($n)
{
  $prom = 1;
  for ($i = 1; $i <= $n; $i++) {
    $prom = $i / $n;
    echo "El promedio de ";
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
