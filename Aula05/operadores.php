<?php 
// Operadores - O que é / Operador de atribuição
// ==========
# são simbolos que permitem executar operações matematicas
# ou operações lógicas / comparativas

// Parte 1
# Operador de atribuição utilizando o sinal de "="

echo "<b>Parte 1 - Operador de atribuição utilizando o sinal de '='</b> <br><br>";
$var = 100;
echo "Valor atribuido: " . $var;

echo "<br>";
echo "<br>";
// Parte 2
# Alguns operadores de atribuição

echo "<b>Parte 2 - Operadores Matematicos </b><br><br>";

$a = 10;
$b = 20;
$x = $y = $z = 100;
echo "Soma de y + z: " . $x;

echo "<br>";
echo "<br>";
# Alguns operadores matematicos 
# Adição

$resultado = $a + $b;
echo "Adicao: " . $resultado;

echo "<br>";
echo "<br>";
# Subtração

$x = $b - $a;
echo "Subtracao: " . $x;

echo "<br>";
echo "<br>";
# Multiplicação

$x = $a * $b;
echo "Multiplicacao: " . $x;

echo "<br>";
echo "<br>";
# Divisão

$x = $b / $a;
echo "Divisao: " .  $x;

echo "<br>";
echo "<br>";
# Modulo (Resto da divisão)

$x = 4 % 2; 
echo "Modulo: " . $x;

echo "<br>";
echo "<br>";
$x = 10 % 3; # Resultado 3 sobra 1 
echo "É exibido: " . $x;

?>