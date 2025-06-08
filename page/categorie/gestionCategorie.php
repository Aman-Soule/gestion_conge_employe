<h2 class="text-center georgia">Gestion des categories</h2>
<div class="card col-md-6 offset-3 border border-1">
    <div class="card-header bg-primary text-white">
        <h5 class="card-title">Nouvelle Categorie</h5>
    </div>
    <form action="" method="POST">
        <div class="card-body">
            <input type="text" class="form-control" name="nomCategorie" required> 
            <button class="btn btn-sm btn-primary mt-2" type="submit" name="action" value="ajouterCategorie">Enregistrer</button>
        </div>
    </form>
</div>
<table class="table table-hover table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                        <tbody>
                                            <?php foreach($listeCategorie as $key => $c): ?>
                                                <tr>
                                                    <td><?= $key+1 ?></td>
                                                    <td><?= $c['nomCategorie'] ?></td>
                                                    <td>
                                                        <form method="POST">
                                                            <input type="hidden" name="idCategorie" value="<?= $c['idCategorie'] ?>">
                                                            <div class="input-group-append">
                                                            <input type="text" name="nomCategorie" class="form-control" value="<?= $c['nomCategorie'] ?>" aria-label="search">
                                                                <button name="action" value="modifierCategorie" class="btn btn-warning" type="submit">
                                                                     <i class="fas fa-edit fa-sm"></i>
                                                                 </button>
                                                                 <button name="action" value="supprimerCategorie" class="btn btn-danger" type="submit">
                                                                     <i class="fas fa-trash fa-sm"></i>
                                                                 </button>
                                                            </div>
                                                        </form>
                                                    </td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
</table>
<!-- <?php
    var_dump($listeCategorie);
?> -->