<h1>Articles en Rupture de stock : </h1>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>#</th>
            <th>Libelle</th>
            <th>Prix</th>
            <th>Quantite</th>
            <th>Categorie</th>
           
        </tr>
    </thead>
    <tbody>
        <?php foreach ($listeArticle as $key => $c):
            // if($c['qteStock'] < 5){
        if($c['qteStock'] <= 5){?>
            <tr>
                <td><?= $key + 1 ?></td>
                <td><?= $c['nomArticle'] ?></td>
                <td><?= $c['prix'] ?></td>
                <td><?= $c['qteStock'] ?></td>
                <td><?= $c['idCategorieF'] ?></td></tr>
        <?php 
        }
        endforeach ?>
    </tbody>
</table>