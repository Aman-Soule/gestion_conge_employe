<style>
    h1 {
    text-align: center;
    font-size: 28px;
    font-weight: bold;
    color: #2E3A8F;
    background: linear-gradient(135deg, #2E3A8F, #854BBA);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    margin-bottom: 20px;
    padding: 10px;
    transition: transform 0.3s ease-in-out;
}



 .card {
    background: white;
    max-width: 400px;
   
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    transition: transform 0.3s ease-in-out;
}

.card:hover {
    transform: scale(1.02);
}

.card-header {
    background: linear-gradient(135deg, #2E3A8F, #854BBA);
    color: white;
    padding: 15px;
    border-radius: 10px 10px 0 0;
    font-size: 18px;
    font-weight: bold;
}

.card-body {
    padding: 20px;
}

.card-body div {
    
    padding: 10px;
    background: #f4f4f4;
    border-radius: 5px;
}

h6 {
    font-weight: bold;
    color: #333;
}

</style>

<h1>Bienvenue sur votre compte <?= htmlentities($_SESSION['employe']['nomEmploye']) . " " . htmlentities($_SESSION['employe']['prenomEmploye']) ?></h1>

<div class="card">
    <div class="card-header">
        <h4>Vos informations</h4>
    </div>
    <div class="card-body">
        <div>
            <h6 class="primary">Nom et Prenom : </h6>
            <?= $_SESSION['employe']['nomEmploye'] . " " . $_SESSION['employe']['prenomEmploye']  ?>
        </div>

        <div>
            <h6>Telephone</h6>
            <?= $_SESSION['employe']['telEmploye'] ?>
        </div>

        <div>
            <h6>Email</h6>
            <?= $_SESSION['employe']['emailEmploye'] ?>
        </div>

        <div>
            <h6>Role</h6>
            <?= $_SESSION['employe']['nomRole'] ?>
        </div>
    </div>
</div>
<div>
