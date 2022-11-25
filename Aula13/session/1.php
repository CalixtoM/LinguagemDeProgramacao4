<?php 

  //Para trabalhar com sessões são utilizadas diversas funções
  session_start();

  $_SESSION['nome'] = "José Batista Leal";
  $_SESSION['idade'] = 49;
  // Sessões são usadas para compartilhar informações entre várias páginas diferentes

  echo "<h2>Sessões</h2>";
  // Para concatenarmos texto com conteudo de arrays associativas ou conteudos de superGlobais
  // precisamos utilizar as chaves {}, pois, são chamadas de String super complexa em PHP.

  echo "Nome: " . $_SESSION['nome'] . ", " . $_SESSION['idade'];
  echo "<br></br>";


  //função para reconhecimento do ID da sessão.
  echo session_id();

?>