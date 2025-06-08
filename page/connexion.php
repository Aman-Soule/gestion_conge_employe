<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <style>
        
        .right-section {
            width: 50%;
            /* display: flex; */
            align-items: center;
            justify-content: center;

            margin-bottom: 10%;
            margin-top: 2%;
        }

       

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .input-group {
            margin-bottom: 15px;
        }

        .input-group label {
            display: block;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .submit-btn {
            width: 100%;
            padding: 10px;
            background: #2E3A8F;
            color: white;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
        }

        .submit-btn:hover {
            background: #854BBA;
        }
        img{
            
        }
    </style>
</head>

<body>
    <div class="d-flex" id="sect1">
        <!-- <div class="p-2 flex-fill">
            <img src="http://localhost/Projet_classe/img/tof.jpg">
        </div> -->
        <div class="p-2 flex-fill">
            <div class="right-section">
                <div class="form-container">
                    <h2>Connexion</h2>
                    <form action="#" method="POST">
                        <div class="input-group">
                            <label for="">Login</label>
                            <input type="text" id="login" name="login" required>
                        </div>
                        <div class="input-group">
                            <label for="password">Mot de passe</label>
                            <input type="password" id="password" name="mdp" required>
                        </div>
                        <button type="submit" name="btnConnect" class="submit-btn">Se connecter</button>
                    </form>
                </div>
                <div>
                    <strong>Vous n'avez pas de compter ? </strong> <a href="http://localhost/Projet_classe/page/creerCompte.php">Cliquez pour creer un compte</a>
                </div>
            </div>
        </div>
        
    </div>



</body>

</html>