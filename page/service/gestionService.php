<h1>SERVICE</h1>

<div>
    <button class="btn btn-primary" id="ajoutService" onclick="ajoutService()">Ajouter un service</button>

</div>

<div id="formAjout" class="card mt-4" hidden>
    <form action="" method="post">
        <div>

            <label for="" class="font-weight-bold">Nom du Service</label>
            <input type="text" name="nomService" class="form-control" id="libelle">
        </div>
        <div>
            <button class="btn btn-primary" name="action" value="ajoutService" type="submit">Ajouter</button>
        </div>
    </form>
</div>
<table class="table table-bordered  table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
    <thead class="table-dark">
        <tr>
            <th>#</th>
            <th>Nom du Service</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($listeService as $key => $s): ?>
            <tr>
                <td><?= $key + 1 ?></td>
                <td><?= $s['nomService'] ?></td>
                <td>
                    <form action="" method="post">
                        <div class="container" style="display: flex;">
                            <div>
                                <button class="btn btn-sm mr-2 btn-primary" id="liveAlertBtn" name="action" value="accept">Modifier</button>
                            </div>
                            <input type="text" name="idSS" value="<?= $s['idService'] ?>" hidden>
                            <div>
                                <button class="btn btn-sm btn-danger" name="action" value="supprimerService">Supprimer</button>
                            </div>
                        </div>
                    </form>


                </td>
            </tr>

        <?php
        endforeach ?>
    </tbody>
</table>