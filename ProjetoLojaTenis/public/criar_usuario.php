<!-- conexão com banco -->
<?php
session_start();

// requisita o arquivo de configuração
require_once '../inc/config.php';
    // Define admin como a variavel que armazena objeto PDO
    $admin = new PDO(
        "mysql:host=" . MYSQL_HOST . ";" .
        "dbname=" . MYSQL_DATABASE . "; charset=utf8" ,
        MYSQL_USER,
        MYSQL_PASSWORD

    );

// Se o campo nm do formulario estiver setado, executa o bloco a seguir
if(isset($_POST['nm'])){

    // Passa para a variavel senhacrip o valor da variavel pw e criptografa usando hash
    $senhacrip = hash('sha256', $_POST['pw']);

    try {


        $stmt = $admin->prepare('INSERT INTO usuarios VALUES (null, :nome, :email, :senha)');
        $stmt->execute(array(
            ':nome' => $_POST['nm'],
            ':email' => $_POST['em'],
            ':senha' => $senhacrip
        ));

        echo $stmt->rowCount();
    } catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<!-- Links Bootstrap-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<title>Login</title>
</head>
<body>
<form method="post">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<h4>Nome:</h4><input type="text" name="nm" class="form-control">
			</div>
			<div class="col-sm-4">
				<h4>Email:</h4><input type="email" name="em" class="form-control">
			</div>
			<div class="col-sm-4">
				<h4>Senha:</h4><input type="password" name="pw" class="form-control">
			</div>
		</div><br><br>
		<div class="row" id="c">
			<input type="submit" name="bt" class="btn btn-success" value="registrar">
		</div>
	</div>
</form>

</body>
</html>

