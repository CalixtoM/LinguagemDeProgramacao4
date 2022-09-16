<?php 

// "Array" multidimensional
# São "arrays" numericos ou associativos, cujos valores são outros arrays 

# É uma estrutura multidimensional, pois possui elementos de "arrays" dentro de um outro "array". 

# Array multidimensional numericos
$dados = [
    [10, 20, 30, 40],           # Elemento 1 indice 0 do "array" $dados
    [100, 200, 300, 400],       # Elemento 2 indice 1 do "array" $dados
    [1000,                      # Elemento 3 indice 2 do "array" $dados subitem 1 - ind 0
    2000,                       # Elemento 3 indice 2 do "array" $dados subitem 2 - ind 1
    3000,                       # Elemento 3 indice 2 do "array" $dados subitem 3 - ind 2
    4000]                       # Elemento 3 indice 2 do "array" $dados subitem 4 - ind 3
];
# Como apresentamos estes elementos destes "arrays"
# Exemplo 1
# Multidimensionais de indice numerico
echo $dados[2][2]; # 3000
echo "<br>";

echo $dados[0][1]; # 20
echo "<br>";

# Exemplo 1
# Multidimensional associativo (indice "String" nominal)

$dados2 = [
    'cliente'   => ['nome', 'endereco', 'fone'],
    'estados'   => ['Alagoas', 'Para', 'DF - Brasilia'],
    'frutas'    => ['Maca', 'Banana', 'Laranja']
];
# Como apresentamos os elementos deste 'array' multidimensional de indice nominal

echo $dados2['cliente'][0];
echo "<br>";
echo $dados2['frutas'][2];
echo "<br>";
echo $dados2['estados'][1];
?>