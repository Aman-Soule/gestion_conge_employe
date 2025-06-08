<?php
    require_once("connectBD.php");
    function getArticle(){
        $sql = "SELECT * FROM article, categorie where idCategorieF=idCategorie";
        $connect = getBDconnexion();
        $exec = $connect->query($sql);
        return $exec->fetchAll();
    }
    function modifierArticle($id,$libelle,$prix)
    {
        $connect = getBDconnexion();
        $st = $connect->prepare("UPDATE article SET nomArticle =:nom, prix =:p  WHERE idArticle =:id");
        $st->bindParam(':nom', $libelle);
        $st->bindParam(':p', $prix);
        $st->bindParam(':id', $id);
        return $st->execute();
    }

        function insertArticle($libelle,$des,$prix, $quantite, $categorie )
        {
            $connect = getBDconnexion();
            $st = $connect->prepare("INSERT INTO article(nomArticle, description, prix, qteStock, idCategorieF) VALUES('':nom,:desc,:prix,:qte,:idCat)");
            $st->bindParam(':nom', $libelle);
            $st->bindParam(':desc', $des);
            $st->bindParam(':prix', $prix);
            $st->bindParam(':qte', $quantite);
            $st->bindParam(':idCat', $categorie);
            return $st->execute();
        }

    function supprimerArticle($nom)
    {
        $connect = getBDconnexion($nom);
        $st = $connect->prepare("DELETE FROM article WHERE nomArticle =:nomArticle");
        $st->bindParam(':nomArticle', $nom);
        return $st->execute();
    }


// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $idArticle = $_POST['idArticle'];
//     $quantiteAjoutee = $_POST['quantiteAjoutee'];
//     $conn = getBDconnexion();
//     function ajouterEntreeStock($idArticle, $quantiteAjoutee, $conn) {
//          $conn = getBDconnexion();
//         $query = "SELECT qteStock FROM article WHERE idArticle = :id";
//         $stmt = $conn->prepare($query);
//         $stmt->bindParam(':id', $idArticle, PDO::PARAM_INT);
//         $stmt->execute();
//         $article = $stmt->fetch(PDO::FETCH_ASSOC);
        
//         if ($article) {
//             // Ajouter la nouvelle quantité à la quantité actuelle
//             $nouvelleQuantite = $article['qteStock'] + $quantiteAjoutee;

//             // Mettre à jour la quantité dans la base de données
//             $updateQuery = "UPDATE article SET qteStock = :nouvelleQuantite WHERE idArticle = :id";
//             $updateStmt = $conn->prepare($updateQuery);
//             $updateStmt->bindParam(':nouvelleQuantite', $nouvelleQuantite);
//             $updateStmt->bindParam(':id', $idArticle);
//             $updateStmt->execute();
            
//             echo "La quantité de l'article avec l'ID " . $idArticle . " a été mise à jour à " . $nouvelleQuantite . ".";
//         } else {
//             echo "L'article avec l'ID " . $idArticle . " n'a pas été trouvé.";
//         }
//     }

//     // Appeler la fonction pour ajouter l'entrée en stock
//    //ajouterEntreeStock($idArticle, $quantiteAjoutee, $conn);
// }
?>


