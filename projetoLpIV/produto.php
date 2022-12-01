<?php 

include('inc/conecta.php');
include('inc/functions.php');

$prodSelecionado = new Produto(); 

$prodSelecionado->nome = $_GET['nm'];
$prodSelecionado->imagem = $_GET['img'];
$prodSelecionado->valor = $_GET['vl'];


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
                    $prodSelecionado->imagemProduto() 
                ?>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-12">
                        <h2><?php echo $prodSelecionado -> nomeProduto();?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h3><?php echo "R$ ". $prodSelecionado -> valorProduto() .",00";?></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h4>Cor: Padrão</h4>
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
            </div>
        </div>
    </div>


</body>
</html>