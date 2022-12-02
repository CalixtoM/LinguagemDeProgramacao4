<?php 
session_start();
include('inc/conecta.php');
include('inc/functions.php');

// CamelCase
$prodSelecionado = new Produto(); 

$prodSelecionado->nome = $_GET['nm'];
$prodSelecionado->imagem = $_GET['img'];
$prodSelecionado->valor = $_GET['vl'];

$cont = 0;

// Operador aritmetico e atribuição
$soma = 5 + 9;

// Operador logico
$logico1 = false;
$logico2 = true;

if($logico1 or $logico2){
    $vdd = "Um é verdadeiro";
}else{
    $vdd = "Nenhum é verdadeiro";
}

// Operador de comparação
if($_SESSION['nome'] == 'Matheus'){
    $a = "É o ADM";
}

// Incrementação e for
for($i = 0; $i <=3; $i++){
    $cont++;
}

if(isset($_POST['opc'])){
    switch($_POST['opc']){
        case "Sim":
            header("location: avaliacao.php");
            break;
        default:
            
            break;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class="container" style="padding-top: 3%;">
        <div class="row">
            <div class="col-sm-6">
                <?php
                    // Chama a função de classe que exibe a imagem com formatação do Bootstrap 
                    $prodSelecionado->imagemProduto(); 
                ?>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-12" >
                        <h2><?php echo $prodSelecionado -> nomeProduto();?></h2>
                    </div>
                </div>
                <div class="row" style="">
                    <div class="col-12">
                        <h6>Vendido por: Nike</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h3><?php echo "R$ ". $prodSelecionado -> valorProduto() .",00";?></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h6>Cor: Padrão</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h4>Tamanho:</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="form-check" style="padding-right: 2%;">
                        <input class="form-check-input" type="checkbox" value="" id="">
                        <label class="form-check-label" for="">
                            40
                        </label>
                    </div>
                    <div class="form-check" style="padding-right: 2%;">
                        <input class="form-check-input" type="checkbox" value="" id="" >
                        <label class="form-check-label" for="">
                            41
                        </label>
                    </div>
                    <div class="form-check" style="padding-right: 2%;">
                        <input class="form-check-input" type="checkbox" value="" id="" >
                        <label class="form-check-label" for="">
                            42
                        </label>
                    </div>
                    <div class="form-check" style="padding-right: 2%;">
                        <input class="form-check-input" type="checkbox" value="" id="" >
                        <label class="form-check-label" for="">
                            43
                        </label>
                    </div>
                    <div class="form-check" style="padding-right: 2%;">
                        <input class="form-check-input" type="checkbox" value="" id="" checked>
                        <label class="form-check-label" for="">
                            44
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <center>
                            <button type="submit" class="btn btn-info">Comprar</button>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="padding-top: 5%;">
        <div class="row">
            <div class="col-12">
                <center>
                    <h2>Principais Compradores (<?php echo $cont; ?>):</h2>
                </center>
            </div>
        </div>
        <?php 
        //Array
        $compradores[0] = "José Maria";
        $compradores[1] = "Carlos Eduardo";
        $compradores[2] = "Carimbo Miguel";
        $compradores[3] = "Shekira Da Silva";


        foreach ($compradores as $valor) {
            $cont++;
            echo "
                
                <div class='row'>
                    <h6>".$valor."</h6>
                </div>
            ";
        }
        
        ?>
    </div>

    <div class="container" style="padding-top: 5%;">
        <div class="row">
            <div class="col-12">
                <Center><h2>Avaliação:</h2></Center>
            </div>
        </div>
        <form method="post">
            <div class="row">
                <div class="col-12">
                    <h6>Deseja nos avaliar?</h6>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input type="text" class="form-control" name="opc">
                    <Center><input type="submit" class="btn btn-success" value="Avaliar"></Center>
                </div>
            </div>
        </form>
    </div>


</body>
</html>

<style>
    .img-thumbnail{
		background-color: #EBE9EA;
		transition: box-shadow 0.5s;
	}

	.img-thumbnail:hover{
		box-shadow: 0 8px 12px 0 black, 0 8px 12px 0 black;

	}
</style>