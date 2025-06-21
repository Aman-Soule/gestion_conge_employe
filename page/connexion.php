<style>
    .split-section {
        margin-top: 2%;
        border-radius: 15px;
        display: flex;
        max-width: 100%;

        width: 100%;
        background-color: var(--darker-bg);
        /* border-radius:  ; */
        /* overflow: hidden; */
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }

    .form-container {
        flex: 1;
        padding: 40px;
        position: relative;
    }

    .login-container {
        border-right: 1px solid rgba(255, 255, 255, 0.1);
    }

    .form-title {
        font-size: 28px;
        margin-bottom: 30px;
        color: var(--text-light);
        position: relative;
        padding-bottom: 10px;
    }

    .form-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 50px;
        height: 3px;
        background-color: var(--highlight);
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        color: var(--text-gray);
        font-size: 14px;
    }

    .form-group input {
        width: 100%;
        padding: 12px 15px;
        background-color: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 5px;
        color: var(--text-light);
        font-size: 16px;
        transition: all 0.3s ease;
    }

    .form-group input:focus {
        outline: none;
        border-color: var(--highlight);
        background-color: rgba(255, 255, 255, 0.08);
    }

    .btn {
        width: 100%;
        padding: 12px;
        background-color: var(--highlight);
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-top: 10px;
    }

    .btn:hover {
        background-color: #d13354;
        transform: translateY(-2px);
    }

    .form-footer {
        margin-top: 20px;
        font-size: 14px;
        color: var(--text-gray);
        text-align: center;
    }

    .form-footer a {
        color: var(--highlight);
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .form-footer a:hover {
        color: #d13354;
    }

    @media (max-width: 768px) {
        .split-section {
            flex-direction: column;
        }

        .login-container {
            border-right: none;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
    }
</style>

<div class="split-section">
    <div class="form-container login-container">
        <h2 class="form-title">Connexion</h2>
        <form method="post">
            <div class="form-group">
                <label for="login">Nom d'utilisateur</label>
                <input type="text" id="login" name="login" placeholder="Entrez votre email ou nom d'utilisateur">
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" name="mdp" id="login-password" placeholder="Entrez votre mot de passe">
            </div>
            <button type="submit" type="submit" name="btnConnect" class="btn">Se connecter</button>
        </form>
        <div class="form-footer">
            <p>Mot de passe oublié ? <a href="#">Cliquez ici</a></p>
        </div>
    </div>

    <div class="form-container" hidden>
        <h2 class="form-title">Inscription</h2>
        <form action="" method="POST">
            <div class="">
                <div class="form-group">
                    <label for="">Nom</label>
                    <input type="text" name="nom" id="libelle">
                </div>

                <div class="form-group">
                    <label for="" class="font-weight-bold">Prenom</label>
                    <input type="text" name="prenom" id=""></input>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="" class="font-weight-bold">Telephone</label>
                    <input type="text" name="tel" class="form-control" id="prix">
                </div>
                <div class="form-group col-md-6">
                    <label for="" class="font-weight-bold">E-mail</label>
                    <input type="mail" name="mail" id="quantite">
                </div>
                <div class="form-group ml-3 col-md-6" hidden>
                    <label for="" class="font-weight-bold">Service</label>
                    <select name="idService" id="">
                        <?php
                        foreach ($listeService as $c) { ?>
                            <option value="<?= $c['idService'] ?>"> <?= $c['nomService'] ?> </option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group ml-3 col-md-6" hidden>
                    <label for="" class="font-weight-bold">Role</label>
                    
                    <select name="idRole" id="">
                        <?php
                        foreach ($listeRole as $r) { ?>
                            <option value="<?= $r['idRole']=2 ?>"> <?= $r['nomRole'] ?> </option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="login" class="font-weight-bold">Login</label>
                    <input type="text"  name="login">
                </div>
                <div class="form-group">
                    <label for="mdp" class="font-weight-bold">Mot de passe</label>
                    <input type="password" name="mdp">
                </div>
            </div>
            <div class="">
                <button class="btn btn-outline-primary" type="submit" name="action" value="ajoutEmploye">Enregistrer</button>
                <button class="btn btn-outline-secondary" type="close">Annuler</button>
            </div>
        </form>
        <div class="form-footer">
            <p>En vous inscrivant, vous acceptez nos <a href="#">Conditions d'utilisation</a></p>
        </div>
    </div>
</div>