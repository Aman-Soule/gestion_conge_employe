<?php
    require_once("connectBD.php");
    function getCategories(){
        $sql = "SELECT * FROM categorie";
        $connect = getBDconnexion();
        $exec = $connect->query($sql);
        return $exec->fetchAll();
    }

    function modifierCategorie($id,$nouveauNom)
    {
        $connect = getBDconnexion();
        $st = $connect->prepare("UPDATE categorie SET nomCategorie =:nom  WHERE idCategorie =:id");
        $st->bindParam(':nom', $nouveauNom);
        $st->bindParam(':id', $id);
        return $st->execute();
    }
    function categorieSupprimes(){
        $sql = "SELECT * FROM categorie WHERE etatCategorie = 0";
        $connect = getBDconnexion();
        $exec = $connect->query($sql);
        return $exec->fetchAll();
    }

    function insertCategorie($nom)
    {
        $connect = getBDconnexion();
        $st = $connect->prepare("INSERT INTO categorie(nomCategorie) VALUES(:nom)");
        $st->bindParam(':nom', $nom);
        return $st->execute();
    }
    function supprimerArticlesParCategorie($idCategorie) {
        $connect = getBDconnexion();
        $st = $connect->prepare("DELETE FROM article WHERE idCategorieF = :idCategorie");
        $st->bindParam(':idCategorie', $idCategorie);
        $st->execute();
    }
    function supprimerCategorie($nom, $idCategorie)
    {
        supprimerArticlesParCategorie($idCategorie);
        $connect = getBDconnexion($nom); 
        $st = $connect->prepare("DELETE FROM categorie  WHERE nomCategorie = :nomCategorie");
        $st->bindParam(':nomCategorie', $nom);
        return $st->execute();
    }

    function getCategoriesSupprimees(){
        try{
            $connect = getBDconnexion();
            $sql = "SELECT * FROM categorie WHERE etatCategorie = 0 ORDER BY nomCategorie";
            $stmt = $connect->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            throw new Exception("Erreur");
        }
    }
    // function getCategoriesSupprimees() {
    //     $connect = getBDconnexion();
    //     $stmt = $connect->prepare("SELECT * FROM categories_supprimees");
    //     $stmt->execute();
        
    //     $categoriesSupprimees = array();
    //     while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    //         $categoriesSupprimees[] = $row;
    //     }
    //     return $categoriesSupprimees;
    // }
    
?>