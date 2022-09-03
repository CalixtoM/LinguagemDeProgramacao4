<?php 
// Operadores de diferença
// =======================

# Exemplo 1
$a = (2 != 3); # True


# Exemplo 2 - Forma alternativa do exemplo anterior
# Porem, menos utilizada
$a = (100 <> 100); # False

# Exemplo 3
$a = (50 != 50); # False

# Exemplo 4
$a = (50 != '50'); # False
## Neste caso, também é avaliado o valor e não o tipo de variavel

# Exemplo 5
$a = (50 !== '50'); # True
## Neste caso são avaliados a igualdade e o tipo de variavel

// Os operadores com 3 simbolos, comparam valor e tipo.

if($a){
    echo "true";
} else{
    echo "false";
}
?>