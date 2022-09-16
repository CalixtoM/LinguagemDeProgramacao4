<?php 

// "Array" misto - Combinação de arrays numericos e associativos
# Podemos criar um array que combine indices numericos ou nominais (String)
# Não são utilizados com frequencia por serem mais dificeis de gerenciar


$dados = [
    0 => 10,
    'nome' => 'Paulo',
    'sobrenome' => 'Araujo',
    10 => 1000,
    11 => 'Endereco'
];

# Dificulta a forma de acessar os dados

echo $dados[0]; # 10
echo '<br>';

echo $dados['nome']; # Paulo
echo '<br>';

?>