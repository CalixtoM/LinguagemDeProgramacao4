<?php 


echo "Escolha: \n 1 - Adição \n 2 - Subtração \n 3 - Multiplicação \n 4 - Divisão";
$result = 0;

if(isset($_POST['calc'])){
    switch ($_POST['calc']){
        case 1:
            // Executa bloco de adição
            $result = $_POST['n1'] + $_POST['n2'];
            echo "<br>";
            echo "Resultado $result";
            break;
        case 2:
            // Executa bloco de subtração 
            $result = $_POST['n1'] - $_POST['n2'];
            echo "<br>";
            echo "Resultado $result";
            break;
        case 3:
            // Executa bloco de multiplicação 
            $result = $_POST['n1'] * $_POST['n2'];
            echo "<br>";
            echo "Resultado $result";
            break;
        case 4:
            // Executa bloco de divisão
            $result = $_POST['n1'] / $_POST['n2'];
            echo "<br>";
            echo "Resultado $result";
            break;
        default:
            // Executa exceção
            echo "<br>";
            echo 'Invalido';
        
            break;
    }
}


?>

<html>
    <head>
        <title>Calculadora</title>
    </head>
    <body>
        <form method="post" >
            <label>Opção</label>
            <input type="number" name="calc">
            <label>n1</label>
            <input type="number" name="n1">
            <label>n2</label>
            <input type="number" name="n2">
            <input type="submit">
        </form>
    </body>
</html>