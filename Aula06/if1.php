<?php 
//Declarações / Instruções condicionais
# Operadores lógicos

# Exemplo 1
$valor = 20;

if($valor > 10 && $valor != 30){
    // executa um código
} else{
    // executa codigo SENÂO
}

# Exemplo 2
# Condição dentro de outra condição
$valor1 = 10;
if($valor1 >= 0){
    if($valor1 >= 100){
        echo "o numero é maior ou igual a cem";
        echo "<br>";
    } else{
        echo "o numero é positivo, mas menor que 100";
        echo "<br>";
    }
} else{
    echo "o numero é negativo";
    echo "<br>";

}

?>