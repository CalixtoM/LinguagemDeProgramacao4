<?php 
// Controle de fluxo (loops) - Laço Do While
# Diferente do controle de fluxo While, o Do While executa o bloco de código e realiza o teste lógico depois.

$x = 1;

# Exemplo Tradicional
do{

    echo "Exemplo 1 ";
    echo "ciclo DO WHILE em execução " . $x;
    echo "<br>";
    $x++;

}while($x < 10);

do{

    echo "Exemplo 1 ";
    echo "ciclo DO WHILE em execução " . $x;
    echo "<br>";
    $x++;
    
}while($x < 10);

?>