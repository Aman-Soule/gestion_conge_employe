<table class="table table-hover table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead class="table-dark">
        <tr>
            <th>Nom employé</th>
            <th>Motif</th>
            <th>Etat congé</th>
            <th>Date de soumission</th>
            <th>Date de debut</th>
            <th>Date de fin</th>
            <th>Durée (jour)</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($listeConge as $k => $c):
            $date_debut = $c['date_debut'];
            $date_fin = $c['date_fin']; ?>
            <tr>
                <form action="" method="post">
                    <!-- Je recupere le nom du responsable pour la mettre dans une variable globale pour qu'elle soit visible au niveau de l'employe (Savoir qui a accepté ou refuser son conge) -->

                    <td>
                        <input type="text" value="<?= $c['idConge'] ?>" name="id" style="border:none" readonly hidden>
                        <?= $c['nomEmploye'] ?>
                    </td>
                    <td><?= $c['motif'] ?></td>
                    <td><?= etatConge($c['etatConge']);  ?></td>
                    <td><?= $c['dateA'] ?></td>
                    <td><?= $c['date_debut']  ?></td>
                    <td><?= $c['date_fin']  ?></td>
                    <td><?= calculerDureeConge($date_debut, $date_fin); ?></td>
                    <td>
                            <div class="container" style="display: flex;">
                                <div>
                                    <button class="btn btn-sm mr-2 btn-primary" id="liveAlertBtn" name="action" value="accept">Accepter</button>
                                </div>
                                <div>
                                    <button class="btn btn-sm btn-danger" name="action" value="refus">Refuser</button>
                                </div>                                
                            </div>

                    </td>
                </form>

            </tr>
    </tbody>
<?php endforeach ?>
</table>