<?php 

// Array (vetor) numerico
# Sempre que precisarmos trabalhar com 'array' numerico
# Utilizamos o indice

$valores = [10, 20, 30];
$valores[1] = 200; # [10, 200, 30]

# Podemos ignorar o indice na inclusão de um novo elemento
$valores[] = 400; # teremos então a configuração do array [10, 200, 30, 400.

# Para apresentar o conteudo do 'array'
echo 'O valor do array[1] = ' . $valores[1] . ' e [2] = ' . $valores[2];
echo '<br>';
# ou

echo "O valor do array[1] =  $valores[1] e [2] = $valores[2]";

?>