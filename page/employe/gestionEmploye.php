<h1>Liste des employés: </h1>
<div class="row mb-2">
    <button class="btn btn-primary " id="btnAdd" onclick="ajoutEmploye()">Ajouter un Employe</button>
</div>
<div class="row mt-4 container" id="formAjout" hidden>

    <h3 class="text-center">Ajout Employé</h3>
    <form action="" method="POST">
        <div class="card-body">
            <div class="form-group">
                <label for="" class="font-weight-bold">Nom</label>
                <input type="text" name="nom" class="form-control" id="libelle">
            </div>

            <div class="form-group">
                <label for="" class="font-weight-bold">Prenom</label>
                <input type="text" name="prenom" class="form-control" id=""></input>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label for="" class="font-weight-bold">Telephone</label>
                <input type="text" name="tel" class="form-control" id="prix">
            </div>
            <div class="form-group col-md-6">
                <label for="" class="font-weight-bold">E-mail</label>
                <input type="mail" name="mail" class="form-control" id="quantite">
            </div>
            <div class="form-group ml-3 col-md-6">
                <label for="" class="font-weight-bold">Service</label>
                <select name="idService" id="" class="form-control">
                    <?php
                    foreach ($listeService as $c) { ?>
                        <option value="<?= $c['idService'] ?>"> <?= $c['nomService'] ?> </option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group ml-3 col-md-6">
                <label for="" class="font-weight-bold">Role</label>
                <select name="idRole" id="" class="form-control">
                    <?php
                    foreach ($listeRole as $r) { ?>
                        <option value="<?= $r['idRole'] ?>"> <?= $r['nomRole'] ?> </option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div>
                <label for="login">Login</label>
                <input type="text" class="form-control" name="login">
            </div>
            <div>
                <label for="mdp">Mot de passe</label>
                <input type="password" class="form-control" name="mdp">
            </div>
        </div>
        <div class="">
            <button class="btn btn-outline-primary" type="submit" name="action" value="ajoutEmploye">Enregistrer</button>
            <button class="btn btn-outline-secondary" type="close">Annuler</button>
        </div>
    </form>
</div>
<table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
    <thead class="table-dark">
        <tr>
            <th>#</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Telephone</th>
            <th>E-mail</th>
            <th>Service</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($listeEmployes as $key => $c): ?>
            <tr>
                <td><?= $key + 1 ?></td>
                <td><?= $c['nomEmploye'] ?></td>
                <td><?= $c['prenomEmploye'] ?></td>
                <td><?= $c['telEmploye'] ?></td>
                <td><?= $c['emailEmploye'] ?></td>

                <td><?= $c['nomService'] ?></td>
                <td>
                    <div class="container" style="display: flex;">
                        <div>
                            <button class="btn btn-sm mr-2 btn-primary" id="liveAlertBtn" name="action" value="accept">Modifier</button>
                        </div>
                        <div>
                            <button class="btn btn-sm btn-danger" name="action" value="refus">Supprimer</button>
                        </div>
                    </div>

                </td>

            </tr>

        <?php
        endforeach ?>
    </tbody>
</table>