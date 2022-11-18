<?php 
# Validação dos campos com sanitize. Limpeza dos dados
// Diferente do validate e verifica a validade dos dados digitados pelo usuario
if(isset($_POST['nome'], $_POST['idade'])){
    // Remove codifos HTML e espaços em branco
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    echo $nome. "<br>";

    $idade = $_POST['idade'];
    echo $idade . "<br>";
    $idade = filter_input(INPUT_POST, "idade", FILTER_SANITIZE_NUMBER_INT);
    echo $idade . "<br>";

    $email = $_POST['email'];
    echo $email."<br>";
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    echo $email."<br>";
    $peso = $_POST['peso'];
    echo $peso;
    $email = filter_input(INPUT_POST, "peso", FILTER_SANITIZE_NUMBER_FLOAT);

}

?>

<html>
    <head>
        <title></title>
    </head>
    <body>
        <form method="post">
            <label>Nome:</label>
            <input type="text" name="nome">
            <label>Idade:</label>
            <input type="number" name="idade" min="1" max="125">
            <label>Email:</label>
            <input type="email" name="email">
            <label>Peso:</label>
            <input type="number" name="email">
            <input type="submit" name="bt_enviar" value="Enviar">
        </form>
    </body>
</html>