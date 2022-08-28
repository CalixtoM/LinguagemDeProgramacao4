<?php 
//Uso de Variaveis
//==============================
# Utilizadas para armazenar dados: numeros, textos, etc
# Podemos apresentar e modificar os valores contidos em seu interior
# ao longo do codigo.

# As variaveis sao definidas com o caracter $ e o nome da variavel
# como identificador
 
    $variavel01;

    # foi criado um espaco de memoria sem conteudo
    # variavel nao iniciada

    $variavel02 = "Teste";
    # conteudo da variavel alterado com valor e tipo de dados
    # observamos que a variavel nao é tipíficada
 
    # apresentar o conteudo da variavel
    echo $variavel02;

    # As variaveis sao "case sensitive"
    # portanto uma variavel denominada $variavel02 e
    #outra denominada $Variavel02, são portanto, diferentes
    $Variavel02 = 100; /* Uma variavel */
    $variavel02 = 150; /* Outra variavel */

    echo $variavel02;
    echo $Variavel02;


    # formas NÃO recomendadas de nomear variaveis
    # Exemplo de variaveis mal definidas
    /* 
    $1var = 0;
    $!var = 1;
    $variavel(1)=0;
    $variavel um = 34;
    $variavel-um = 2;
    */

    # formas recomendadas de nomear variaveis 
    $var1 = 0;
    $var_um = 1;
    $varUm = 0;
    $_var_um = 34;
    $_1 = 2;

    # Não ha uma definição de forma mais correta de se nomear uma variavel
    # Porem, é recomendado um mesmo padrão em um mesmo projeto.
    # Pode-se verificar se o cliente ja possui um padrão definido ou se
    # ele deseja um determinado padrao.
    # Exemplos:
    # 1 - Camel Case - padrão muito utilizado
    $umaVariavel = 0;

    # 2 - Snake Case - Com underscores
    $uma_variavel = 0;

    # 3 - Studly Case - Não muito recomendado, pois pode entrar 
    # em conflito com nomes de classes
    $UmaVariavel = 0;

    
?>