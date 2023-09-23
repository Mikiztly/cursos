<?php
	// Imprime la tabla de multiplicar del 1 al 10 del numero pasado por _GET

	// Rutina de control
	 if(isset($_GET["entrada"]) && is_numeric($_GET["entrada"])){
	    $Numero = $_GET["entrada"];
	}else{
    	$Numero = 5;
		echo "<p>No se definio un valor para la variable, se utiliza el 5</p>";
     }

	echo "<h2>Tabla de multiplicar de ".$Numero."</h2>";

	for($XLoop = 1; $XLoop <= 10; $XLoop++){
    	echo $Numero." x ".$XLoop." = ".($Numero*$XLoop)."<br/>";
	}
?>