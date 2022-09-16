<?php 

// arrays (vetor) - O que é
# É uma matriz (unidimensional) que corresponde a uma coleção de valores.
# Funciona como uma variavel que contem muitos valores.
# A localização de um desses valores é designada por um indice do "array".

# Exemplo
$valores1 = array(1,2,3,4,3,2,1); # Array numerico
$nomes = array('Pedro', 'Paulo', 'Ana'); # Array de texto

# A partir do PHP 5.x passou-se a representar de uma outra forma mais simples
# Arrays de indice numerico

$valores2 = [1,22,3,45,50,6,77,];
$nomes2 = ['Pedro', 'Ana', 'Paulo'];

# Os 'arrays' possuem como base o indice 0
echo $valores2[0];
echo '<br>';
echo $valores2[1];
echo '<br>';

# Exemplo nomeado com numeros
# para isto vamos utilizar um "Operador de atribuição" (=>)
$dados = [
    10 => 100,
    20 => 200,
    30 => 300 
];
echo $dados[10];
echo '<br>';

?>