<?php

	# O objetivo do teste é verificar se o conteudo armazenado na variavel de sessão está sendo passado para as demais
    session_start();
    echo $_SESSION['nome'];
	echo "<br></br>";
	echo session_id();


?>