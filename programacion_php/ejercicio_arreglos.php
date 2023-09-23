<?php
    /* Crear un rey llamado meses que almacene el nombre de los doce meses del año y 
    recorrerlo con el bucle for para mostrarlo en pantalla los 12 meses  */

    $Meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",
        "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
    for ($Xloop=0; $Xloop < count($Meses) ; $Xloop++) { 
        echo $Meses[$Xloop]."<br/>"
    }
?>