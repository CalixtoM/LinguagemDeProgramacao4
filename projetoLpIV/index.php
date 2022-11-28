<?php 
    session_start();
    $nomeUsuario = $_SESSION['nome'];
    include('inc/functions.php');
    include('inc/conecta.php');
?>

<!DOCTYPE html>
<html>
<head>
<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="icon" type="imagem/png" href="img/logo2.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
<!-- Meta -->
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<ul class="nav justify-content-center" style="background-color: black;" id="frete">
		<?php echo '<li class="nav-item" style="color: white; ">Olá '.$nomeUsuario.', Você ganhou R$ 10,00 de desconto em frete</li>' ?>
	</ul>

	<ul class="nav justify-content-center" id="titulo">
		<li class="nav-item" style=""><h4><b>Showes</b></h4></li>
	</ul>

	<div class="parallax" id="parallax">
		<div class="c">
			<div class="row"></div>
			<div class="row" id="ln" style="margin-top: 120px;">
				<div class="col-sm-9">
					<h1 style="color: white; margin-left: 35px;">A melhor loja de Jordan</h1>
				</div>
			</div>
			<div class="row" id="ln">
				<div class="col-sm-12">
					<p style="color: white; margin-left: 35px;">O tênis Jordan é fruto de uma velha e forte<br>parceria entre Nike e o jogador Michael Jordan</p>	
				</div>
				
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<center>
				<h1>Destaques</h1>
				<p>Frete grátis e chinelo de brinde é aqui, aproveite por tempo limitado.</p>
			</center>
		</div>
		<div class="row" style="margin-top:  25px">
            
            <?php 

                // Chama a função que busca os produtos
                buscaProd($mysqli);
            
            ?>
			<!--<div class="col-sm-3" id="itens">
				<img src="img/tenis/1.png" class="img-thumbnail" alt="...">
			</div>
			<div class="col-sm-3" id="itens">
				<img src="img/tenis/2.png" class="img-thumbnail" alt="...">
			</div>
			<div class="col-sm-3" id="itens">
				<img src="img/tenis/3.png" class="img-thumbnail" alt="...">
			</div>
			<div class="col-sm-3" id="itens">
				<img src="img/tenis/4.png" class="img-thumbnail" alt="...">
			</div>
		</div>
		<div class="row" style="margin-top: 10px; margin-bottom: 100px;">
			<div class="col-sm-3" id="itens">
				<img src="img/tenis/5.png" class="img-thumbnail" alt="...">
			</div>
			<div class="col-sm-3" id="itens">
				<img src="img/tenis/6.png" class="img-thumbnail" alt="...">
			</div>
			<div class="col-sm-3" id="itens">
				<img src="img/tenis/7.png" class="img-thumbnail" alt="...">
			</div>
			<div class="col-sm-3" id="itens">
				<img src="img/tenis/8.png" class="img-thumbnail" alt="...">
			</div> -->
		</div>
	</div>

	<footer id="foot">
		<center><p style="color: white;">Todos os direitos reservados</p></center>
	</footer>

</body>
</html>

<style type="text/css">
	
	.parallax {
	  	/* The image used */

	  	background-image: url("./img/wallpaper.jpeg");
	  	/* Set a specific height */
	  	min-height: 400px;
	  	opacity: 2.2;



	  	/* Create the parallax scrolling effect */
	  	background-attachment: fixed;
	  	background-position: center;
	  	background-repeat: no-repeat;
	  	background-size: cover;
	  	margin-bottom: 30px;



	}
	
	.c{
	  background: rgba(0, 0, 0, 0.7);
	  min-height: 400px;
	}

	#titulo{
		margin-top: 5px;
		margin-bottom: 5px;
	}


	#foot{
		background-color: black;
		margin-bottom: -20px;
		margin-top: 20px;
		padding-top: 14px;
		padding-bottom: 8px;
	}

	.img-thumbnail{
		background-color: #EBE9EA;
		transition: box-shadow 0.5s;
	}

	.img-thumbnail:hover{
		box-shadow: 0 8px 12px 0 black, 0 8px 12px 0 black;

	}

	#frete{
		padding-top: 5px;
		padding-bottom: 5px;
	}

	#itens{
		margin-bottom: 20px;
	}

	#ln{
		max-width: 860px;
	}

	
	@media (max-width:  575px){


		#ln{
			max-width: 350px;
		}

	}	
	


</style>