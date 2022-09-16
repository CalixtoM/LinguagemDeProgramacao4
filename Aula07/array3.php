<?php 
// "Array" (vetor) associativo
# Ao contrário do array de um indice numerico, as chaves são do tipo "string"

$valores1 = [
    'A' => 20,
    'B' => 30,
    'C' => 40,
    'D' => 50
];

echo $valores1['A'];
echo "<br>";

$valores1 = [
    'A' => 200,
    'B' => 300 # sobreposição
];

echo $valores1['A'];
echo "<br>";
echo $valores1['B'];
echo "<br>";


$valores2 = [
    'nome'      => 'Paulo',
    'email'     => 'paulo@gmail.com',
    'telefone'  => '(013) 999'

];

echo $valores2['nome'];
echo "<br>";
echo "<br>";

?>