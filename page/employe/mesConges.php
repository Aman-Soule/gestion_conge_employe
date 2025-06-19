<?php
$i = 0;
?>
<h1 class="text-center">Mes congés</h1>

<div class="container mt-5">
    <div class="row">
        <!-- condition qui permet de filtrer les congés et d'afficher seulement les congés de celui qui s'est connecté -->
        <?php foreach ($listeConge as $c => $conge):

            if ($conge['idEmployeF'] == $_SESSION['employe']['idEmploye']):
                $i += 1;
        ?>
                <div class="col-md-4">
                    <div class="card border-primary mb-3">
                        <div class="card-header">
                            <h3 class="text-center strong text-white">Congé N* <?= $i ?></h3>
                        </div>
                        <div class="card-body">

                            <h5 class="card-title">Congé du <?= htmlspecialchars($conge['date_debut']) ?> au <?= htmlspecialchars($conge['date_fin']) ?></h5>
                            <h4>Durée : <?= calculerDureeConge($conge['date_debut'], $conge['date_fin']) ?> jour(s)</h4>

                            <h4>Date de soumission : <?= $conge['dateA'] ?></h4>
                            <h4>Action effectué par : </h4>
                            <p class="card-text">
                                État :
                                <?php
                                echo ($conge['etatConge'] == 0) ? "<span class='badge bg-warning'>En attente</span>" : (($conge['etatConge'] == 1) ? "<span class='badge bg-success'>Accepté</span>" : (($conge['etatConge'] == 2) ? "<span class='badge bg-danger'>Refusé</span>" :
                                    "<span class='badge bg-danger'>Refusé</span>"));
                                ?>
                            </p>
                        </div>
                        <div class="card-footer">
                            <!-- Boutton pour mofifier le conge -->
                            <form action="" method="post">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Modifier
                                </button>
                                <input type="text" name="idCS" value="<?= $conge['idConge'] ?>" hidden>
                                <button class="btn btn-danger" name="action" value="supprimerConge">Supprimer</button>
                            </form>

                        </div>
                    </div>
                </div>



                <!-- Modal -->
                <div class="modal fade" data-bs-backdrop="false" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modifier les informations de la demande</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label for="">Date de debut</label>
                                        <input type="date" value="<?= $conge['date_debut'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Date de fin</label>
                                        <input type="date" value="<?= $conge['date_fin'] ?>">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                <button type="button" class="btn btn-primary">Enregistrer</button>
                            </div>
                        </div>
                    </div>
                </div>
        <?php
            endif;
        endforeach; ?>
    </div>
</div>