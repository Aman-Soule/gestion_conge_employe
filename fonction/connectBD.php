<?php
    function getBDconnexion(){
        $host = 'localhost';
        $DBname = 'gestion_stock';
        $user = 'root';
        $password = '';
        try{
            $conn = new PDO("mysql:host=$host;dbname=$DBname", $user, $password);
            $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
        catch(PDOException $ex){
            echo "Erreur de connexion a la base de données : ".$ex -> getMessage();
        }
    }
?>