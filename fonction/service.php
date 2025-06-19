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
function supprimerService($idS){
    $connect = getBDconnexion();
    $st = $connect->prepare("DELETE FROM service WHERE idService =:idS");
    $st->bindParam(':idS', $idS);
    echo ' <div class="modal fade" id="loginExistModal" tabindex="-1" aria-labelledby="loginExistModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-danger text-white">
                            <h5 class="modal-title" id="loginExistModalLabel">Suppression du Service</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center">
                            Service supprimé !
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        </div>
                    </div>
                </div>
            </div>
            <script>
            document.addEventListener("DOMContentLoaded", function() {
                var myModal = new bootstrap.Modal(document.getElementById("loginExistModal"));
                myModal.show();
            });
            </script>';
    return $st->execute();
}
?>