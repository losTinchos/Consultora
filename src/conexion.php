<?php
 
 
 class Conexion{
      
    public static function conectar() 
    {
        $dbs = 'mysql:dbname=consultoria;host=localhost';
        $user = 'root';
        $pass = '';
    
        try {
            $base= new PDO($dbs, $user, $pass);
            echo "Conexion Exitosa <br>";
            return $base;
        } catch (PDOException $e) {
            echo 'Falló la conexion: ' . $e->getMessage();
        }
        
                  
    }

}


?> 