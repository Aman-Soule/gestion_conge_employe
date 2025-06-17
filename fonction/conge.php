<?php
    require_once("connectBD.php");
    function getConge(){
        $sql = "SELECT * FROM conge, employe WHERE idEmployeF=idEmploye";
        $connect = getBDconnexion();
        $exec = $connect->query($sql);
        return $exec->fetchAll();
    }

    function insertConge($motif, $dateD, $dateF,$idE, $dateSoumission)
    {
        $connect = getBDconnexion();
        $dateSoumission = date("Y-m-d");
        $st = $connect->prepare("INSERT INTO conge( motif, date_debut, date_fin, idEmployeF, dateA) VALUES(:motif, :dateD, :dateF, :employe,:dateA)");
        
        $st->bindParam(':motif', $motif);
        $st->bindParam(':dateD', $dateD);
        $st->bindParam(':dateF', $dateF);
        $st->bindParam(':employe', $idE);
        $st->bindParam(':dateA', $dateSoumission);
        return $st->execute();
    }
    function calculerDureeConge($date_debut, $date_fin) {
    $debut = new DateTime($date_debut);
    $fin = new DateTime($date_fin);
    
    // Calcul de la différence entre les dates
    $interval = $debut->diff($fin);
    
    return $interval->days; // Retourne le nombre de jours de congé
}
function etatConge($etatConge){
    if($etatConge == 0){
        $etat = "En attente";
        return $etat;
    }elseif($etatConge == 1){
        $etat = "Accepter";
        return $etat;
    }
    else{
        $etat = "Refusé";
        return $etat;
    }
}

    function acceptConge($id)
    {
        $connect = getBDconnexion();
        $st = $connect->prepare("UPDATE conge SET etatConge =1  WHERE idConge =:id");
        $st->bindParam(':id', $id);
        
        echo '
            <div class="modal fade" id="loginExistModal" tabindex="-1" aria-labelledby="loginExistModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-primary text-white">
                            <h5 class="modal-title" id="loginExistModalLabel">Congé accepté</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Congé  accepté avec succés
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fermer</button>
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
    function refus($id)
    {
        $connect = getBDconnexion();
        $st = $connect->prepare("UPDATE conge SET etatConge= 2 WHERE idConge=:id");
        $st->bindParam(':id',$id);
        echo ' <div class="modal fade" id="loginExistModal" tabindex="-1" aria-labelledby="loginExistModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-danger text-white">
                            <h5 class="modal-title" id="loginExistModalLabel">Congé Refusé</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Ce congé a été refusé.
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

    function modifierConge($id, $motif, $dateD, $dateF){
        $connect = getBDconnexion();
        $st = $connect->prepare("UPDATE conge SET motif =:motif, date_debut =:dateD, date_fin=:dateF  WHERE idConge =:id");
        $st->bindParam(':motif', $motif);
        $st->bindParam(':dateD', $dateD);
        $st->bindParam(':dateF', $dateF);
        $st->bindParam(':id',$id);
        return $st->execute();
    }
     function supprimerConge($idC)
    {
        $connect = getBDconnexion();
        $st = $connect->prepare("DELETE FROM conge WHERE idConge =:idC");
        $st->bindParam(':idC', $idC);
        return $st->execute();
    }
?>