<?php 
// Controle de fluxo (loops) - Laço FOREACH
# Permite executar um bloco de código a partir de valores de um "array"
# Notar que não há necessidade de inicializar uma variavel, nem realizar o incremento ou decremento desta variavel,
# Poi, o ciclo passa automaticamente de forma sequencial em cada elemento do "array"

# Note também que cada elemento do "array" e carregado na variavel logo após a declaração de "AS"

# Exemplo 1
$nomes = ["Tomé", "André", "Tadeu"];
foreach($nomes as $nome){
    echo $nome;
    echo "<br>";
}


?>