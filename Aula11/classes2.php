<?php 

    // Classes  - Introdução
    // Uma classe é definida em PHP pela declaração "class" seguido do nome da classe, também possui chaves delimitadoras do código

    // Por convenção do PSR-1 (define os padrõpes básicos de codificação do PHP)
    // O nome de uma classe deve ser  


    # Exemplo 1 - Definição de Classe
    class AnimalMamifero        # Utilizando padrão com: primeira letra capital 
    {

        // Define-se as propriedades e métodos nesta seção.
        # Propriedades: são variaveis em PHP que armazenam as caracteristicas do objeto. São conhecidas como "fields" (campos)
        # ou atributos de uma classe. Precisam ter uma definição de acesso (visibilidade) especifica (publicas, reservadas, etc)

        # Metodos: são funções que definem o que o objeto pode fazer.
    }

    # Exemplo 2
    class FiguraGeometrica {
        # Definindo as propriedades
        public $largura, $altura;
        public $x;
        public $y;

        # Definindo um método
        function calcArea($a, $b){
            return $a * $b;
        }
    }


?>