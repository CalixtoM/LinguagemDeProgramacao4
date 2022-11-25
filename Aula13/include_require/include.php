<?php 

	include('cabecalho.php');

?>

<html>
    <head>
        <title></title>
    </head>
    <body>

        <?php
            include('cabecalho.php'); 
            //Inclui outro arquivo, sendo que caso esse arquivo não seja encontrado, um erro "warning" é exibido e o sistema continua sendo interpretado

            include_once('cabecalho.php');
            //Executa a mesma função, porém caso o arquivo já tenha sido chamado em outro include, não é gerado nenhum erro.
            
            
            require('rodape.php');
            //Inclui outro arquivo, sendo que caso o arquivo não seja encontrado, o programa não é executado

            require_once('rodape.php');
            //Executa a mesma função, porém caso o arquivo já tenha sido chamado em outro include, não é gerado nenhum erro.
            //Essa extensao é mais recomendada para evitar problemas em programas grandes.
        ?>

    </body>
</html>