<!-- 

<h2>Bienvenue sur votre compte <?= htmlentities($_SESSION['employe']['nomEmploye']) . " " . htmlentities($_SESSION['employe']['prenomEmploye']) ?></h1>

<div class="panel">
    <div class="">
        <h4>Vos informations</h4>
    </div>
    <div class="">
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
<div> --> 
<h2 class="welcome-title text-center">Bienvenue sur votre compte <?= htmlentities($_SESSION['employe']['nomEmploye']) . " " . htmlentities($_SESSION['employe']['prenomEmploye']) ?></h2>

<div class="employee-dashboard">
    <div class="info-panel">
        <div class="panel-header">
            <h4>📋 Vos informations</h4>
        </div>
        <div class="panel-body">
            <div class="info-item">
                <span class="info-label">Nom et Prénom :</span>
                <span class="info-value"><?= htmlentities($_SESSION['employe']['nomEmploye'] . " " . htmlentities($_SESSION['employe']['prenomEmploye'])) ?></span>
            </div>

            <div class="info-item">
                <span class="info-label text-strong">Téléphone :</span>
                <span class="info-value"><?= htmlentities($_SESSION['employe']['telEmploye']) ?></span>
            </div>

            <div class="info-item">
                <p class="info-label">Email :</p>
                <span class="info-value"><?= htmlentities($_SESSION['employe']['emailEmploye']) ?></span>
            </div>

            <div class="info-item">
                <span class="info-label">Rôle :</span>
                <span class="info-value"><?= htmlentities($_SESSION['employe']['nomRole']) ?></span>
            </div>
        </div>
    </div>
</div>

<style>
    .welcome-title {
        color: #2c3e50;
        margin-bottom: 25px;
        font-size: 24px;
        border-bottom: 2px solid #eee;
        padding-bottom: 10px;
    }
    
    .employee-dashboard {
        max-width: 600px;
        margin: 0 auto;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    
    .info-panel {
        background: white;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        overflow: hidden;
    }
    
    .panel-header {
        background: #f8f9fa;
        padding: 15px 20px;
        border-bottom: 1px solid #eee;
    }
    
    .panel-header h4 {
        margin: 0;
        color: #3498db;
    }
    
    .panel-body {
        padding: 20px;
    }
    
    .info-item {
        margin-bottom: 15px;
        display: flex;
    }
    
    .info-label {
        font-weight: 600;
        color: #7f8c8d;
        width: 150px;
        flex-shrink: 0;
    }
    
    .info-value {
        color: #2c3e50;
    }
    
    @media (max-width: 600px) {
        .info-item {
            flex-direction: column;
        }
        
        .info-label {
            margin-bottom: 5px;
            width: auto;
        }
    }
</style>
