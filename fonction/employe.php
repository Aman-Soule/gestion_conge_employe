<?php
require_once("connectBD.php");

function findByLogin($login,$mdp){
    $connect = getBDconnexion();
    $st = $connect->prepare("SELECT * FROM employe, role  WHERE login=:log and password=:pass and idRoleF=idRole"); 
    $st->bindParam(':log', $login);
    $st->bindParam(':pass', $mdp); //hasher le mot de passe => $st->bindParam(':pass', sha1($mdp));
    $exec = $st->execute();
    return $st->fetch(); //recuperer un emplye si son login et son mot de passe existe bie dans la base de donnée
}
function getEmployes(){
    $sql = "SELECT * FROM employe,  service WHERE idServiceF=idService order by nomEmploye"; // Récupérer tous les employés avec leur service
    $connect = getBDconnexion();
    $exec = $connect->query($sql);
    return $exec->fetchAll();
}
function insertEmploye($nom,$prenom,$tel, $mail, $idService,$idRole,$login, $mdp )
{
    $connect = getBDconnexion();
    $st = $connect->prepare("SELECT COUNT(*) FROM employe WHERE login = :login");
    $st->bindParam(':login', $login);
    $st->execute();
    $count = $st->fetchColumn();

    if ($count > 0) {
        //$erreurLog = "Impossible d'utiliser ce login";
        echo "<script>alert('Le login existe déjà !');</script>";
        header('refresh:0');
        return false;
    }
    
    $st = $connect->prepare("INSERT INTO employe(nomEmploye, prenomEmploye, telEmploye, emailEmploye,login,password, idServiceF,idRoleF) VALUES(:nom,:prenom,:tel,:mail,:log,:mdp,:idService,:idRole)");
    $hashedPassword = password_hash($mdp, PASSWORD_DEFAULT); //hasher le mot de passe lors de l'insertion d'un employe
    $st->bindParam(':nom', $nom);  
    $st->bindParam(':prenom', $prenom);
    $st->bindParam(':tel', $tel);
    $st->bindParam(':mail', $mail);
    $st->bindParam(':log', $login);
    $st->bindParam(':mdp', $hashedPassword);
    $st->bindParam(':idService', $idService);
    $st->bindParam(':idRole',$idRole);
    return $st->execute();
}

// {
//     $connect = getBDconnexion();
//     $st = $connect->prepare("INSERT INTO employe(nomEmploye, prenomEmploye, telEmploye, emailEmploye) VALUES('':nom,:prenom,:tel,:email)");
//     $st->bindParam(':nom', $nom);
//     $st->bindParam(':prenom', $prenom);
//     $st->bindParam(':tel', $tel);
//     $st->bindParam(':email', $mail);
   
//     return $st->execute();
// }
?>