<?php 
    // Classes - Objetos e Instancias
    # Para trabalhar com classes precisamos instanciar uma classe.

    # Para acessar as propriedades de uma classe, dentro dos métodos da classe, 
    # é necessário utilizar uma pseudovariavel "$this" seguida de um operador "->".

    # A construção de uma classe em PHP não exige que seja criada antes do codigo principal.

    # Exemplo
    class Humano{

        # Propriedades
        public $nome = "Abreu";             # Public é um modificador de acesso (visibilidade da variavel)
        public $codnome = "Doutor";


        # Metodos
        public function nomeCompleto(){
            return $this->codnome . ' ' . $this->nome;

            # Atenção
            # Note que para acessar a propriedade "nome", definida como "public $nome", foi necessário
            # utilizar a pseudo variavel "$this".
        }
    }

    # Descrição 2
    # Instanciação de um objeto
    # Um objeto - uma variavel criada a partir da classe.
    # Instanciar um objeto significa criar um objeto a partir da classe
    # atribuindo a variavel a expressao "new" e o nome da classe.
    $homem = new Humano(); 
    $homem2 = new Humano();

    #Definindo valores diferentes para o objeto $homem2
    $homem2->nome = "José";
    $homem2->codnome = "Escritor";
    # Criamos um objeto novo de nome "homem" a partir da classe humano.
    # Podemos agora acessar às propriedades e metodos do objeto.
    
    echo $homem -> nomeCompleto();
    echo "<br>";
    echo $homem2 -> nomeCompleto();

?>