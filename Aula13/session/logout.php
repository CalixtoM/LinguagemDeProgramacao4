<?php 

	# Para fazer o logout de sessões em PHP é necessário
	# Utilizar funções de finalização.

	session_start();
	session_unset();
	session_destroy();

?>