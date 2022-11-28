<?php 

// Função com passagem do parametro de conexao do banco de dados que busca todos os produtos registrados
function buscaProd($mysqli){
    $produtos = "SELECT * FROM produtos";

    if($result = $mysqli->query($produtos)){
        
        // Enquanto houver produtos registrados, o loop permanece sendo executado
        while($obj = $result->fetch_object()){
            echo 
                '
                <div class="col-sm-3" id="itens">
				    <a href="produto.php?nm='.$obj->nm_produto.'&img='.$obj->ds_imagem_produto.'&vl='.$obj->vl_produto.'"><img src="'.$obj->ds_imagem_produto.'" class="img-thumbnail" alt="..."></a>
			    </div>
                ';
        }
    }
}

Class Produto{
    public $nome;
    public $imagem;
    public $valor;

    public function nomeProduto(){
        return $this->nome . ' ' . $this->imagem . ' ' . $this->valor;


    }
}

?>