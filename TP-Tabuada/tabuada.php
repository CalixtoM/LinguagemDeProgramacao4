<?php 

// Exercicio - Tabuada (1 a 10)
# Realizar uma tabuada em PHP



# Tabela do 1 com for
echo "<h3>For!</h3>";

// For para controlar os valores da tabuada
for($j = 1; $j <= 10; $j++){

    echo "Tabuada do ".$j;
    echo "<br>";

    // For para controlar os numeros de 1 a 10 que irão multiplicar o valor da tabela
    for($i = 1; $i <= 10; $i++){

        echo $j ." X ". $i . " = ". $i * $j;
        echo "<br>";

    }

    echo "<br><br>";

}

echo "<hr>";

echo "<h3>While!</h3>";

$c = 1;

// While para controlar os valores da tabuada
while($c <= 10){

    echo "Tabuada do ".$c;
    echo "<br>";
    $d = 1;

    // While para controlar os numeros de 1 a 10 que irão multiplicar o valor da tabela
    while($d <= 10){

        echo $c ." X ". $d . " = ". $c * $d;
        $d++;
        echo "<br>";

    }

    $c++;
    echo "<br><br>";

}

echo "<hr>";

echo "<h3>Do While!</h3>";

$c = 1;

// Do para controlar os valores da tabuada
do{

    $d = 1;

    // Do para controlar os numeros de 1 a 10 que irão multiplicar o valor da tabela
    do{

        echo $c ." X ". $d . " = ". $c * $d;
        $d++;
        echo "<br>";

    // Comando que testa a condição
    }while($d <= 10);

    $c++;
    echo "<br><br>";

// Comando que testa a condição
}while($c <= 10);

?>