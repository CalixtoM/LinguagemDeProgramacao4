<?php 

// Declarações e instruções condicionais
# Switch - É uma alternativa ao encadeamento do IF...ELSEIF...ELSE

$nome = 'Paulo';
# Neste caso não temos a construção de uma condição logica 
# Mas, podemos construir uma condição lógica e armazena-la em uma variavel de teste.
switch ($nome){
    case 'Jonatas':
        // Executa esse bloco de código 1
        echo 'instruções de código 1';
        echo "<br>";
        echo 'instruções de código 2';
        break;
    case 'Paulo':
        // Executa esse bloco de código 2
        echo 'instruções de código 3';
        echo "<br>";
        echo 'instruções de código 4';
        break;
    default:
        // Executa esse bloco de código 3
        echo 'instruções de código 5';
        echo "<br>";
        echo 'instruções de código 6';
        break;
}

?>