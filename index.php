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

$productos = array ("MESA", "SILLA", "FLEXO", "ESTANTERIA");

echo "<br>";

echo "Recorrido del array mediante variables<br>";

echo "<br>";

echo $productos[0] ."<br>";
echo $productos[1] ."<br>";
echo $productos[2] ."<br>";
echo $productos[3] ."<br>";

echo "<br>";

echo "Recorrido del array escalar (indexada númeriacamente) mediante for sabiendo el total de los elementos<br>";

echo "<br>";

for($i=0; $i < 4 ; $i++){
    echo $productos[$i] ."<br>";
}

echo "<br>";

echo "Recorrido del array escalar supuestamente sin conocer el número total de claves (keys)<br>";

echo "<br>";

for($j=0; $j < count($productos) ; $j++){
    echo $productos[$j] ."<br>";
}

echo "<br>";

echo "Recorrido del array escalar mediante while<br>";

echo "<br>";

$m = 0;
while($m < count($productos)){
   echo $productos[$m] ."<br>";
   $m++;
}

echo "<br>";

echo "Recorrido del array escalar mediante foreach<br>";

echo "<br>";

foreach ($productos as $valor){
    echo $valor ."<br>";
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

$productos2 = array ("M"=>"MESA","S"=>"SILLA","F"=>"FLEXO","E"=>"ESTANTERIA");

echo "<br>";

echo "Recorrido del array asociativa mediante variables<br>";

echo "<br>";

echo $productos2["M"] ."<br>";
echo $productos2["S"] ."<br>";
echo $productos2["F"] ."<br>";
echo $productos2["E"] ."<br>";

echo "<br>";

echo "Recorrido del array escalar mediante while<br>";

echo "<br>";

$a = "";
while($a < count($productos2)){
   echo $productos2[$a] ."<br>";
   $a++;
}

echo "<br>";

echo "Recorrido del array escalar mediante foreach<br>";

echo "<br>";

foreach ($productos2 as $valor){
    echo $valor ."<br>";
}

?>
