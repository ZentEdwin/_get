<?php

	$ingreso = $_POST['ingresado'];
	$texto = str_replace(" ", "%20", $ingreso);
	$leng = $_POST['tradu1'];
	$leng2 = $_POST['tradu2'];


		$página_inicio = file_get_contents('http://api.microsofttranslator.com/V2/Ajax.svc/Translate?oncomplete=mycallback&appId=5AD720F81C7DB8E3775A308681C8DC821E636F82&from='.$leng .'&to='.$leng2 .'&text=' .$texto);
		echo $página_inicio;
?>