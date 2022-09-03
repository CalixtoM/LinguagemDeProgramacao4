<?php 

// Operadores de comparação
# Permitem a comparação entre valores
# Verificam igualdade, diferença, maior, menor ou de mesmo tipo.
# O resultado da comparação será sempre um "booleano" (False ou True).
// ====================================================================

# Operador de igualdade
// Obserje a diferença entre um operador de "atribuição" e de "comparação"

# Exemplo 1
$a = (2 == 3); # False

# Exemplo 2
$a = (100 == 100); # True 

# Exemplo 3

$a = (50 == '50'); # True

# Exemplo 4
$a = (50 === '50'); # False
// Nesse caso ocorre uma verificação de igualdade e, também, do tipo de variavel

// ATENÇÂO: Não conseguimos visualizar o resultado (True ou False)
// Mas, podemos verificar a existencia dele


# Neste exemplo não conseguimos visualizar o conteudo da variavel
$a = (2 == 3); # False
echo $a;
echo "<br>";

# Então, a solução é a de expressar a sua existencia

if($a){
    echo "True";
    echo "<br>";

} else{
    echo "False";
}

?>