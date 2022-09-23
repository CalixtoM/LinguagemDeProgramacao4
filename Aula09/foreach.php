<?php 
// Controle de fluxo (loops) - Laço FOREACH
# Permite executar um bloco de código a partir de valores de um "array"
# Notar que não há necessidade de inicializar uma variavel, nem realizar o incremento ou decremento desta variavel,
# Poi, o ciclo passa automaticamente de forma sequencial em cada elemento do "array"

# Note também que cada elemento do "array" e carregado na variavel logo após a declaração de

# Exemplo 1
$nomes = ["Tomé", "André", "Tadeu"];
foreach($nomes as $nome){
    echo $nome;
    echo "<br>";
}

echo "<br><br>";

# Exemplo 2
$x = [1, 2, 3];

foreach($x as $y){
    echo $y . "<br>";

}

echo "<br><br>";

# Exemplo 3
echo "Exemplo 3 <br>";
# Existe uma assinatura diferente para o FOREACH
$EstadoCapital=[
    'Acre' => 'Rio Branco',
    'Amapa' => 'Macapa',
    'Alagoas' => 'Maceio',
    'Ceara' => 'Fortaleza'
];

foreach($EstadoCapital as $chave => $value){
    echo "A capital do estado " . $chave . " é " . $value;
    echo "<br>";

}
?>