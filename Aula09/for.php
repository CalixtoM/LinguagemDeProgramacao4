<?php 
// Controle de fluxo (loops) - Laço For
# Permite executar um bloco de código em um determinado numero de vezes.
# Este "laço" constitui-se de 3 parametros.
# 1 - Valor inicial numerico. Utilizado para controlar o numero de "loops"
# 2 - Condição: Avalia o contador para encerramento do "loop".
# 3 - Incremento ou Decremento: Altera o valor do contador.

# A variavel é criada e inicializada dentro do laço.


# Exemplo 1
for($x = 1; $x < 10; $x++){
    echo "Exemplo 1 - " . $x . "<br>";
}

echo "<br><br>";

# Exemplo 2 
for($x = 1; $x < 10; $x++)
    echo "Exemplo 2 - " . $x . "<br>";

echo "<br><br>";

# Exemplo 3
$x = 1;
for(; $x < 10; $x++){
    echo "Exemplo 3 - " . $x . "<br>";
}

echo "<br><br>";

# Exemplo 4
# Array
$nomes = ['Pedro', 'Tiago', 'João'];

for($i = 0; $i < sizeof($nomes); $i++){
    echo "<br>";
    echo "Exemplo 4 - " . $nomes[$i];
}

echo "<br><br>";

# Exemplo 5
for($c = 1, $z = 10; $c < 10; $c++, $z--){
    echo "Exemplo C - " . $c . " ";
    echo "Exemplo Z - " . $z . "<br>";
}

?>