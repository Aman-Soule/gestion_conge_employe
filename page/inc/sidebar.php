 <!-- Sidebar -->
 <?php
    require_once("index.php");
    ?>
 <ul  class="navbar-nav sidebar sidebar-dark accordion" style="background: linear-gradient(135deg,rgb(14, 25, 55),rgb(23, 12, 49));" id="accordionSidebar" <?= isset($_SESSION['employe']) && $_SESSION['employe']['login'] ? "" : "hidden"  ?>>

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
         <!-- <div class="sidebar-brand-icon rotate-n-15">
             <img src="data:image/png;base64,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" alt="dashboard">
         </div> -->
         <div class="sidebar-brand-text mx-3">OptiManager</div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
     <li class="nav-item active">
         <a class="nav-link" href="?page=accueil">
             <i class="fas fa-fw fa-graduation-cap"></i>
             <span>Connecté : <?= $_SESSION['employe']['nomEmploye'] ?>
                 <!-- <i class="text-secondary">
                     <?= $_SESSION['employe']['emailEmploye'] ?>
                 </i></span>
             <div class="circle status"></div> -->
         </a>

     </li>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->


     <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
             aria-expanded="true" aria-controls="collapseTwo">
             <!-- <i class="fas fa-fw fa-cog"></i> -->
             <span>Categories</span>
         </a>
         <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <a class="collapse-item" href="?page=gestionCategorie">Gestion Categories</a>
                 <a class="collapse-item" href="?page=categorieSupprimes">Catégories Supprimées</a>
             </div>
         </div>
     </li>

     <!-- Nav Item - Utilities Collapse Menu -->
     <li class="nav-item" <?= isset($_SESSION['employe']) && $_SESSION['employe']['nomRole'] == "admin" ? "" : "hidden"  ?>>
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
             aria-expanded="true" aria-controls="collapseUtilities">
             <!-- <i class="fas fa-fw fa-shopping-basket"></i> -->
             <span>Article</span>
         </a>
         <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
             data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <a class="collapse-item" href="?page=gestionArticle">Gestion des articles</a>
                 <a class="collapse-item" href="?page=articleSupprimes">Rupture de stock</a>
                 <!-- <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a> -->
             </div>
         </div>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->


     <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
             aria-expanded="true" aria-controls="collapsePages">
             <!-- <i class="fas fa-fw fa-user-circle"></i> -->
             <span>Employé</span>
         </a>
         <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <a class="collapse-item" href="?page=gestionEmploye">Gestion Employés</a>
                 <a class="collapse-item" href="?page=gestionService">Service</a>
             </div>
         </div>
     </li>
     <li class="nav-item">
         <a class="nav-link collapsed" href="?page=commande">
             <span>Commande</span>
         </a>
     </li>

     <!-- Nav Item - Charts -->
     <li class="nav-item">
         <a class="nav-link" href="charts.html">
             <!-- <i class="fas fa-fw fa-dashboard"></i> -->
             <span>Tableau de bord</span></a>
     </li>

     <!-- Nav Item - Tables -->
     <li class="nav-item" <?= isset($_SESSION['employe']) && $_SESSION['employe']['nomRole'] == "stock" ? "" : "hidden"  ?>>
         <a class="nav-link" href="?page=demandeConge">
             <!-- <i class="fas fa-fw fa-table"></i> -->
             <span>Demande de Congé</span></a>
         <a class="nav-link" href="?page=mesConges">
             <!-- <i class="fas fa-fw fa-table"></i> -->
             <span>Mes congés</span></a>

     </li>

     <li class="nav-item" <?= isset($_SESSION['employe']) && $_SESSION['employe']['nomRole'] == "responsable" ? "" : "hidden"  ?>>
         <a class="nav-link" href="?page=listeConge">
             <i class="fas fa-fw fa-table"></i>
             <span>Liste des congés</span></a>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider d-none d-md-block">

     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>

     <!-- Sidebar Message -->


 </ul>
 <!-- End of Sidebar -->