
<?php 

    // Funções anonimas
    // Utilizando variaveis de escopo global.

    $x = 50;
    $y = 45;

    $varFunc = function($z) use($x, $y){
        echo "$z + $x = " . ($z * $x) . "<br>";
        echo "$z + $y = " . ($z * $y) . "<br>";

        # Esta função demonstra o uso da visibilidade de uso de variaveis definidas externamente a função.
    };

    echo $x ."<br>";
    echo $y ."<br>";

    $varFunc(2);

?>