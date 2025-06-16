<?php
ob_start();
session_start();
include_once("page/inc/header.php");
include_once("page/inc/sidebar.php");
include_once("page/inc/topbar.php");
require_once("fonction/categorie.php"); //inclure la page qui contient la Table categorie de notre BD
require_once("fonction/article.php");
require_once("fonction/employe.php");
require_once("fonction/service.php");
require_once("fonction/role.php");
require_once("fonction/conge.php");
require_once("fonction/passerCommande.php");
$listeRole = getRole();
$listeService = getService();
?>
<div class="container-fluid">
    <?php
    if (isset($_POST['btnConnect'])) {
        extract($_POST);
        $empConnect = findByLogin($login, $mdp);

        if ($empConnect) {
            $_SESSION['employe'] = $empConnect;
            $employeID = $_SERVER['employe'];
            header("location:http://localhost/Projet_Classe/");

            $_SESSION['nomEmploye'] = $empConnect['nomEmploye'];
        } else {
            $erreur = "Login ou mot de passe incorrect !";
        }
    }
     if (isset($_POST['action'])) {
                    $action = $_POST['action'];
                    if ($action == "ajoutEmploye") {
                        extract($_POST);
                        insertEmploye($nom, $prenom, $tel, $mail, $idService, $idRole, $login, $mdp); //important de suivre l'ordre car cela peut causer des erreurs betement
                        header('refresh:5');
                    }
                }
    if (isset($_GET['deconnexion'])) {
        $_SESSION = [];
        session_destroy();
        header("location:http://localhost/Projet_Classe/");
        header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
        header("Pragma: no-cache");
        header("Expires: 0"); // permet de ne pas pouvoir retourner en arriere une fois qu'on se deconnecte
        exit();
    }
    if (isset($_SESSION['employe'])) {
        $p = isset($_GET['page']) ? $_GET['page'] : "accueil";

        $listeCategorie = getCategories();
        switch ($p) {
            case "accueil":
                if (file_exists("page/$p.php")) {
                    include_once("page/$p.php");
                }
            case "gestionCategorie":
                if (isset($_POST['action'])) {
                    $action = $_POST['action'];
                    if ($action == 'modifierCategorie') {
                        extract($_POST);
                        //appeler la fonction modifier une categorie
                        modifierCategorie($idCategorie, $nomCategorie);
                        header('refresh:0');
                    }
                    if (($action == 'ajouterCategorie')) {
                        extract($_POST);
                        insertCategorie($nomCategorie);
                        
                        header('refresh:0');
                    }
                    if ($action == 'supprimerCategorie') {
                        extract($_POST);
                        supprimerCategorie($nomCategorie, $idCategorie);
                        header('refresh:0');
                    }
                }

                if (file_exists("page/categorie/$p.php")) {
                    include_once("page/categorie/$p.php");
                }
                break;
            case "gestionArticle":
                $listeArticle = getArticle();
                if (isset($_POST['action'])) {
                    $action = $_POST['action'];
                    if ($action == "ajoutArticle") {
                        extract($_POST);
                        insertArticle($libelle, $description, $prix, $quantite, $categorie);
                        header('refresh:0');
                    }
                    if ($action == "modifierArticle") {
                        extract($_POST);
                        modifierArticle($idArticle, $nomArticle, $prix);
                        header('refresh:0');
                    }
                    if ($action == "supprimerArticle") {
                        extract($_POST);
                        supprimerArticle($nomArticle);
                        header('refresh:0');
                    }
                    if ($action == 'entree') {
                        extract($_POST);
                        // ajouterEntreeStock($idArticle, $quantiteAjoutee, $conn);
                        header('refresh:0');
                    }
                }
                if (file_exists("page/article/$p.php")) {
                    include_once("page/article/$p.php");
                }
                break;
            case "articleSupprimes":
                $listeArticle = getArticle();
                if (file_exists("page/article/$p.php")) {
                    include_once("page/article/$p.php");
                }
                break;
            case "categorieSupprimes":
                $categoriesSupprimees = getCategoriesSupprimees();
                if (file_exists("page/categorie/$p.php")) {
                    include_once("page/categorie/$p.php");
                }
                break;
            case "gestionEmploye":
                $listeEmployes = getEmployes();
                if (file_exists("page/employe/$p.php")) {
                    include_once("page/employe/$p.php");
                }
                if (isset($_POST['action'])) {
                    $action = $_POST['action'];
                    if ($action == "ajoutEmploye") {
                        extract($_POST);
                        insertEmploye($nom, $prenom, $tel, $mail, $idService, $idRole, $login, $mdp); //important de suivre l'ordre car cela peut causer des erreurs betement
                        header('refresh:5');
                    }
                }

                break;
            case "gestionService":
                $listeService = getService();
                if (file_exists("page/service/$p.php")) {
                    include_once("page/service/$p.php");
                }
                if (isset($_POST['action'])) {
                    $action = $_POST['action'];
                    if ($action == "ajoutService") {
                        extract($_POST);
                        insertService($nomService);
                        header('refresh:0');
                    }
                }

                break;

            case "demandeConge":
                $listeConge = getConge();
                if (file_exists("page/employe/$p.php")) {

                    include_once("page/employe/$p.php");
                }
                if (isset($_POST['action'])) {
                    $action = $_POST['action'];
                    if ($action == "ajoutConge") {
                        extract($_POST);
                        $dateSoumission = date('Y-m-d');
                        insertConge($motif, $dateD, $dateF, $idE, $dateSoumission);
                        header('refresh:0');
                    }
                }

                break;
            case "mesConges":
                $listeConge = getConge();
                if (file_exists("page/employe/$p.php")) {

                    include_once("page/employe/$p.php");
                }
                // if (isset($_POST['action'])) {
                //     $action = $_POST['action'];
                //     if ($action == "ajoutConge") {
                //         extract($_POST);
                //         $dateSoumission = date('Y-m-d');
                //         insertConge($motif, $dateD, $dateF, $idE, $dateSoumission);
                //         header('refresh:0');
                //     }
                // }

                break;
            case "listeConge":
                $listeConge = getConge();
                if (file_exists("page/employe/$p.php")) {

                    include_once("page/employe/$p.php");
                }
                if (isset($_POST['action'])) {
                    $action = $_POST['action'];
                    if ($action == "accept") {
                        extract($_POST);
                        acceptConge($id);
                        header('refresh:6');
                    }
                    if ($action == "refus") {
                        extract($_POST);
                        refus($id);
                       // $val = $_POST['validateur'];
                        header('refresh:6');
                    }
                    if ($action == "modifConge") {
                        extract($_POST);
                        modifierConge($id, $motif, $dateD, $dateF);
                    }
                }
                break;
        }
    } else {
        include_once("page/connexion.php"); //Par defaut, lorsqu'on rentre dans le site, on a dans un premier temps le formulaire de connexion
    }
    ?>
</div>
<?php
include_once("page/inc/footer.php");
ob_end_flush();
?>