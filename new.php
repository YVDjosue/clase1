
<?php
// $anio = 1987;
function rafa_bisiesto($anio)
{
  if (($anio % 4 == 0 && $anio % 100 != 0) || ($anio % 400 == 0)) {
    echo "$anio Es bisiesto \n";
  } else {
    echo "$anio No es bisiesto \n";
  };
};

rafa_bisiesto(1997);

//funcion para saber el promedio de 0 hasta n, de un numero n dado
function calcularPromedio($numero)
{
  $suma = 0;
  for ($i = 1; $i <= $numero; $i++) {
    $suma += $i;
  }
  return $suma / $numero;
}

echo "El promedio es: " . calcularPromedio(10);
