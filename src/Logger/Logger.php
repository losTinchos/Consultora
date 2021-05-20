<?php 

if(isset($_POST['nombre']) && isset($_POST['tema']))
{
    $logFile = fopen("log.txt", 'a') or die("Error creando archivo");
    
    fwrite($logFile, "\n".date("d/m/Y H:i:s"). " {$_POST['nombre']}" . " ha hecho una consulta: " . $_POST['tema']) or die("Error escribiendo en el archivo");
    
    fclose($logFile);
}
