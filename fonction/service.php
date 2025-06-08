<?php
require_once("connectBD.php");
require_once("fonction/article.php");
function getService(){
    $sql = "SELECT * FROM service";
    $connect = getBDconnexion();
    $exec = $connect->query($sql);
    return $exec->fetchAll();
}
function insertService($nomService)
{
    $connect = getBDconnexion();
    $st = $connect->prepare("INSERT INTO service(nomService) VALUES(:nomService)");
    $st->bindParam(':nomService', $nomService);
    return $st->execute();
}
?>