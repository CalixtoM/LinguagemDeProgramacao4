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

// Criação da classe produto, que armazena as informações do produto que vem do banco
Class Produto{
    public $nome;
    public $imagem;
    public $valor;

    public function nomeProduto(){
        return $this->nome;


    }

    public function valorProduto(){
        return $this->valor;
    }

    public function imagemProduto(){
        echo '<img style="border-color: black; border: 3px solid black; background-color: #EBE9EA;" class="img-thumbnail rounded float-left" src="'.$this->imagem.'">';
    }
}

?>