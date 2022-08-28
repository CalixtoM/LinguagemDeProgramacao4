<?php 

// Formatação de variaveis numericas
// Utilizando numberFormat()

echo "Formatacao de Variaveis numericas <br>";
echo "<br>";

# Definindo as variaveis
$val = 75.5; //float

// Apresentando SEM formatação
echo "Apresentando a variavel sem a formatação <br>";
echo "Valor da variavel: $val ";
echo "<br>";

# Apresentando o tipo de variavel
echo "Apresentando o tipo de variavel: ";
var_dump($val);

// Apresentando COM formatação
echo " <br><br> Apresentando a variavel com a formatação <br>";
$valFormat = number_format($val, 2, ",", ".");
echo "Valor da variavel formatada: $valFormat ";
echo "<br>";
# Apresentando o tipo de variavel
echo "Apresentando o tipo de variavel: ";
echo var_dump($valFormat);
?>