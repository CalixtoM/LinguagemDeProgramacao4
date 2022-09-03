<?php 

// Operadores de atribuição combinados
// permitem que alteremos o valor original de uma variavel.
// a partir do valor original
// ==========================

$x = 10;
$x = $x + 10;
$x = $x - 7;
$x = $x * 2;
$x = $x / 2;

echo "<br>";
echo $x;
echo "<br>";

// Reiniciar com "Formato simplificado"

$x = 10;
$x += 10;
$x -= 7;
$x *= 2;
$x /= 2;

echo "<br>";
echo $x;
echo "<br>";

?>