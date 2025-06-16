<h2>Gestion des articles</h2>
<!-- <?php
        var_dump($listeArticle);
        ?> -->
<div class="row mb-2">
    <button class="btn btn-primary " id="btnAdd" onclick="ajoutArticle()">Ajouter un Article</button>
</div>
<div class="card row mt-4" id="formAjout" hidden>
    <div class="card-header">
        <h5 class="card-title">Ajout</h5>
    </div>
    <form action=""  method="POST">
        <div class="card-body">
            <div class="form-group">
                <label for="" class="font-weight-bold">Libelle</label>
                <input type="text" name="libelle" class="form-control" id="libelle">
            </div>

            <div class="form-group">
                <label for="" class="font-weight-bold">Description</label>
                <textarea name="description" class="form-control" id=""></textarea>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label for="" class="font-weight-bold">Prix</label>
                <input type="number" name="prix" class="form-control" id="prix">
            </div>
            <div class="form-group col-md-6">
                <label for="" class="font-weight-bold">Quantite en Stock</label>
                <input type="number" name="quantite" class="form-control" id="quantite">
            </div>
            <div class="form-group">
                <label for="" class="font-weight-bold">Categorie</label>
                <select name="categorie" id="" class="form-control">
                    <?php
                    foreach ($listeCategorie as $c) { ?>
                        <option value="<?= $c['idCategorie'] ?>"> <?= $c['nomCategorie'] ?> </option>
                    <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-outline-primary" type="submit" name="action" value="ajoutArticle">Enregistrer</button>
            <button class="btn btn-outline-secondary" type="close">Annuler</button>
        </div>
    </form>
</div>
<table class="table table-hover table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead class="table-dark">
        <tr>
            <th>#</th>
            <th>Libelle</th>
            <th>Prix</th>
            <th>Quantite</th>
            <th>Categorie</th>
            <th>Action</th>
            <th>Entrée</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($listeArticle as $key => $c):
            // if($c['qteStock'] < 5){
        ?>
            <tr>
                <td><?= $c['idArticle'] ?></td>
                <td><?= $c['nomArticle'] ?></td>
                <td><?= $c['prix'] ?></td>
                <td class="<?= ($c['qteStock'] <= 5) ? 'stockR' : '' ?>"><?= $c['qteStock'] ?></td>
                <td><?= $c['idCategorieF'] ?></td>
                <td>
                    <form method="POST">
                        <input type="hidden" name="idArticle" value="<?= $c['idArticle'] ?>">
                        <div class="input-group-append">
                            Nom<input type="text" name="nomArticle" class="form-control" value="<?= $c['nomArticle'] ?>" aria-label="search">
                            Prix<input type="number" name="prix" class="form-control" value="<?= $c['prix'] ?>" aria-label="search">
                            <!-- Quantite<input type="number" name="qteStock" class="form-control" value="<?= $c['qteStock'] ?>" aria-label="search"> -->
                            <button name="action" value="modifierArticle" class="btn btn-warning" type="submit">
                                <i class="fas fa-edit fa-sm"></i>
                            </button>
                            <button name="action" value="supprimerArticle" class="btn btn-danger" type="submit">
                                <i class="fas fa-trash fa-sm"></i>
                            </button>
                        </div>
                    </form>
                </td>
                <td>
                    <div class="row mb-2">
                        <button onclick="remplirFormulaire(<?= $c['idArticle'] ?>, '<?= addslashes($c['nomArticle']) ?>', '<?= $c['prix'] ?>', '<?= $c['qteStock'] ?>')" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Ajouter une entrée
                        </button>
                        <div class="modal fade" data-bs-backdrop="false" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Novelle entrée en stock</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- <form action="passerCommande.php" method="post">
                                            Nom : <input type="text" id="nomArticle" class="form-control" aria-label="search" readonly>
                                            Prix Unitaire : <input type="number" name="prix" class="form-control" value="<?= $c['prix'] ?>" aria-label="search" readonly>
                                            Stock Intial : <input type="number" id="quantite" class="form-control" value="<?= $c['qteStock'] ?>" aria-label="search" readonly>
                                            Stock Ajouté : <input type="number" name="quantiteAjoutee" class="form-control" aria-label="search">
                                            id Article : <input type="text" name="idArticle" value="<?= $c['idArticle'] ?>">
                                            <select name="categorie" id="" class="form-control">
                                                <?php
                                                foreach ($listeCategorie as $c) { ?>
                                                    <option value="<?= $c['idCategorie'] ?>"> <?= $c['nomCategorie'] ?> </option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                            <button data-bs-dismiss="modal" name="action" value="entree" type="submit" class="btn btn-success">Mettre a jour</button>
                                    </form> -->
                                        <form method="post">

                                            <input type="hidden" id="idArticle" name="idArticle">
                                            <div><label for="nomArticle">Nom :</label>
                                                <input type="text" id="nomArticle" name="nomArticle" readonly>
                                            </div>
                                            <div> <label for="prix">Prix Unitaire : </label>
                                                <input type="text" id="prix" name="prix" readonly>
                                            </div>

                                            <div> <label for="quantiteDisponible">Stock Actuel :</label>
                                                <span id="quantiteDisponible"></span>
                                            </div>

                                            <div><label for="quantite">Stock à ajoutée :</label>
                                                <input type="number" id="quantite" name="quantiteAjoutee"><br>
                                            </div>

                                            <select name="categorie" id="" class="form-control">
                                                <?php
                                                foreach ($listeCategorie as $c) { ?>
                                                    <option value="<?= $c['idCategorie'] ?>"> <?= $c['nomCategorie'] ?> </option>
                                                <?php
                                                }
                                                ?>
                                            </select>

                                            <!-- <input type="submit" value="entree"> -->
                                            <div>
                                                <button data-bs-dismiss="modal" name="action" value="entree" type="submit" class="btn btn-success">Mettre a jour</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>