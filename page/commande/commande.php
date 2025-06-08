
<!DOCTYPE html>
<html>
<head>
    <title>Passer une Commande</title>
    <script>
        function remplirFormulaire(idArticle, nomArticle, quantiteDisponible) {
            document.getElementById('idArticle').value = idArticle;
            document.getElementById('nomArticle').value = nomArticle;
            document.getElementById('quantiteDisponible').innerHTML = quantiteDisponible;
        }
    </script>
</head>
<body>
    <h1>Passer une Commande</h1>
    <table>
        <thead>
            <tr>
                <th>Libellé</th>
                <th>Prix</th>
                <th>Quantité Disponible</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listeArticle as $article): ?>
            <tr>
                <td><?= $article['nomArticle'] ?></td>
                <td><?= $article['prix'] ?></td>
                <td><?= $article['qteStock'] ?></td>
                <td>
                    <button class="button btn btn-success" id="section" onclick="remplirFormulaire(<?= $article['idArticle'] ?>, '<?= addslashes($article['nomArticle']) ?>', <?= $article['qteStock'] ?>)">
                        Passer une commande
                    </button>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Formulaire pour passer une commande -->
    <form action="passerCommande.php" method="post">
        <input type="hidden" id="idArticle" name="idArticle">
        <label for="nomArticle">Nom :</label>
        <input type="text" id="nomArticle" name="nomArticle" readonly><br>
        
        <label for="quantite">Quantité à commander :</label>
        <input type="number" id="quantite" name="quantite" required><br>
        
        <label for="quantiteDisponible">Quantité disponible :</label>
        <span id="quantiteDisponible"></span><br>
        <button src="article/gestionArticle.php" name="action" value="sorti" type="submit" class="btn btn-success">Commander</button>
        <!-- <section class="section">
            <a href="" value="entree">Commander</a>
        </section> -->
    </form>
</body>
</html>

