<?php
    require_once("connectBD.php");
    function getRole(){
        $sql = "SELECT * FROM role";
        $connect = getBDconnexion();
        $exec = $connect->query($sql);
        return $exec->fetchAll();
    }
?>