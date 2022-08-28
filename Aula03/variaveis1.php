<?php 
// Variaveis CONTINUAÇÃO
//=======================


//variavel do tipo String
$nome = "Manoel";
$aula = 'PHP';


//inteiro
$idade = 20;

//float
$peso = 70.6;
$altura = 1.83;

// Ver 1 - Utilizando as variaveis

echo "Utilizando as variaveis: ";
echo "<br><br>";
echo "Nome:  $nome <br>";
echo 'Idade:  $idade <br>';
echo 'Idade: '. $idade .'<br>';
echo "<br>";


// Ver 2 - Utilizando as variaveis

echo "<p>Meu nome é $nome, tenho $idade anos de idade.</p>";
echo "MInha altura e peso são $altura m, $peso kg, respectivamente";
echo "<br>";
echo "<br>";

//informações sobre as variaveis

echo "informações sobre variaveis: ";
echo "<br>";
var_dump($nome);
echo "<br>";
var_dump($idade);
echo "<br>";
var_dump($peso);

?>