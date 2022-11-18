<?php 

    $email = $_POST['email'];
    $senha = $_POST['pw'];

    echo "<p>Email: ".$email."</p>";
    echo "<p>Senha: ".$senha."</p>";

    var_dump($_POST);

?>