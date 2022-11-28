<?php 

include('inc/conecta.php');
include('inc/functions.php');

$prodSelecionado = new Produto(); 

$prodSelecionado->nome = $_GET['nm'];
$prodSelecionado->imagem = $_GET['img'];
$prodSelecionado->valor = $_GET['vl'];

echo $prodSelecionado -> nomeProduto();
?>