<?php 

    // Funções anonimas
    // São funções sem uma nomeação. Surgiram a partir da versão 5 ou maior do PHP.
    // As funções precisam ter um ";" de finalização após as chaves.

    # Exemplo 1
    $x = function(){
        echo "Exemplo 1 - funcao anonima";
    };

    # A forma de chamar a função requer o uso de uma variavel.
    $x();
    # Observe que a variavel $x funciona como o meio de chamada da função.

    echo "<br>";

    # Exemplo 2
    $msg = function($texto){
        echo "Exemplo 2 - A mensagem de parametro = $texto" . "<br>";
    };

    $msg("Grupo do gluteo Fatecano");

    # Exemplo 3
    $msg2 = function($par1){
        echo "Parametro recebido na funcao: " . $par1 . "<br>";
    
        return "Retorna parametro recebido $par1";
    };

    echo "Exemplo 3 - Função anonima com return";
    echo "<br>";
    echo $msg2(123);


?>