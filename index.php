<?php

/*
 * Realizar:
 * 
 * a)Recorrido del array anterior mediante el uso de variables, 
 * accediendo directamente a los elementos del array.
 * 
 * b)Recorrido del array anterior mediante el uso de un bucle for, 
 * conociendo previamente el número de elementos.
 * 
 * c)Recorrido del array anterior mediante el uso de un bucle for, 
 * si conocer previamente el número de elementos.
 * 
 * d)Recorrido del array anterior mediante el uso de un bucle while.
 * 
 * e)Recorrido del array anterior mediante el uso de foreach
 */

echo "Ejercicio 1. Recorrido de arrays.<br>";

$productos = array("MESA", "SILLA", "FLEXO", "ESTANTERIA");

echo "<br>";

echo "Recorrido del array mediante variables<br>";

echo "<br>";

echo $productos[0] . "<br>";
echo $productos[1] . "<br>";
echo $productos[2] . "<br>";
echo $productos[3] . "<br>";

echo "<br>";

echo "Recorrido del array escalar (indexada númeriacamente) mediante for sabiendo el total de los elementos<br>";

echo "<br>";

for ($i = 0; $i < 4; $i++) {
    echo $productos[$i] . "<br>";
}

echo "<br>";

echo "Recorrido del array escalar supuestamente sin conocer el número total de claves (keys)<br>";

echo "<br>";

for ($j = 0; $j < count($productos); $j++) {
    echo $productos[$j] . "<br>";
}

echo "<br>";

echo "Recorrido del array escalar mediante while<br>";

echo "<br>";

$m = 0;
while ($m < count($productos)) {
    echo $productos[$m] . "<br>";
    $m++;
}

echo "<br>";

echo "Recorrido del array escalar mediante foreach<br>";

echo "<br>";

foreach ($productos as $valor) {
    echo $valor . "<br>";
}

/*
 * Realizar:
 *  
 * f) Recorrido del array anterior mediante el uso de variables.
 * 
 * g) Recorrido del array anterior mediante el uso de un bucle while.
 *
 * h) Recorrido del array anterior mediante el uso de foreach.
 * 
 */

echo "<br>";

echo "Ejercicio 2. Recorrido de array unidimensional asociativas.<br>";

$productos2 = array("M" => "MESA", "S" => "SILLA", "F" => "FLEXO", "E" => "ESTANTERIA");

echo "<br>";

echo "Recorrido del array asociativa mediante variables<br>";

echo "<br>";

echo $productos2["M"] . "<br>";
echo $productos2["S"] . "<br>";
echo $productos2["F"] . "<br>";
echo $productos2["E"] . "<br>";

echo "<br>";

echo "Recorrido del array escalar mediante while<br>";

echo "<br>";


while (list(, $value) = each($productos2)) {
    echo $value . "<br>";
}

echo "<br>";

echo "Recorrido del array escalar mediante foreach<br>";

echo "<br>";

foreach ($productos2 as $valor) {
    echo $valor . "<br>";
}

/*
 * Realizar:
 *  
 * i) Recorrido del array bidimensional mediante el uso de variables.
 * 
 * j) Recorrido del array bidimensional usando un bucle while y un bucle for.
 *
 * k) Recorrido del array bidimensional mediante el uso de dos for.
 * 
 * l) Recorrido del array bidimensional mediante el uso de dos foreach.
 * 
 */

echo "<br>";

echo "Ejercicio 3. Array bidimensional escalar.<br>";

$animales = array(array("Perro", "Mastin", 100), //00-01-02
    array("Gato", "Persa", 150), //10-11-12
    array("Gato", "Siames", 190), //20-21-22
    array("Perro", "Boxer", 25), //30-31-32
    array("Canario", "Timbrado", 250)); //40-41-42

print_r($animales);

echo "<br>";

echo "<br>";


echo "Recorrido del array mediante variables<br>";

echo "<br>";

echo $animales[0][0] . " ";
echo $animales[0][1] . " ";
echo $animales[0][2] . "<br>";

echo $animales[1][0] . " ";
echo $animales[1][1] . " ";
echo $animales[1][2] . "<br>";

echo $animales[2][0] . " ";
echo $animales[2][1] . " ";
echo $animales[2][2] . "<br>";

echo $animales[3][0] . " ";
echo $animales[3][1] . " ";
echo $animales[3][2] . "<br>";

echo $animales[4][0] . " ";
echo $animales[4][1] . " ";
echo $animales[4][2] . "<br>";

echo "<br>";

echo "Recorrido del array mediante while y for<br>";

echo "<br>";

$c = 0;

for ($d = 0; $d < count($animales); $d++) {
    while ($c < count($animales)) {
        echo $animales[$d][$c] . " ";
        $c++;
    }
    echo "<br>";
    $c = 0;
}

echo "<br>";

echo "Recorrido del array mediante dos for<br>";

echo "<br>";

for ($e = 0; $e < count($animales); $e++) {
    for ($f = 0; $f < count($animales); $f++) {
        echo $animales[$e][$f] . "<br>";
    }
}

echo "<br>";

echo "Recorrido del array mediante dos foreach<br>";

echo "<br>";

foreach ($animales as $key => $value) {
    foreach ($value as $valor) {
       echo $valor . " ";
    }
      echo "<br>";
}

/*
 * Realizar:
 *  
 * i) Recorrido del array bidimensional mediante el uso de variables.
 * 
 * j) Recorrido del array bidimensional usando un bucle while y un bucle for.
 *
 * k) Recorrido del array bidimensional mediante el uso de dos for.
 * 
 * l) Recorrido del array bidimensional mediante el uso de dos foreach.
 * 
 */

echo "<br>";

echo "Ejercicio 3. Array bidimensional escalar.<br>";

?>
