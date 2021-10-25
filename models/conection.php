<?php

class Conection{
    
    public static function getConection(){
        include("setting.php");
        $con = new mysqli($server,$user,$pass,$bd);
        if(mysqli_connect_errno()){
            echo "Not connected", mysqli_connect_error();
            $con = "No conectado";
            exit();
        }
        else{
            echo "Connected <br>";
            
            $con = new PDO('mysql:host=localhost; dbname=dblogin', 'root', '');
        }
        return $con;
    }
    
}

?>