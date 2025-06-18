<!DOCTYPE html>
<html lang="en">

<head>
<script>
        function remplirFormulaire(idArticle, nomArticle,prix, quantiteDisponible) {
            document.getElementById('idArticle').value = idArticle;
            document.getElementById('prix').value = prix;
            document.getElementById('nomArticle').value = nomArticle;
            document.getElementById('quantiteDisponible').innerHTML = quantiteDisponible;
        }
        function remplirFormulaire2(idConge, motif, date_debut, date_fin) {
            document.getElementById('idConge').value = idConge;
            document.getElementById('motif').value = motif;
            document.getElementById('date_debut').value = date_debut;
            document.getElementById('date_fin').value = date_fin;
        }
</script>
<style>
      :root {
        --dark-bg: #1a1a2e;
        --darker-bg: #16213e;
        --accent-color: #0f3460;
        --highlight: #e94560;
        --text-light: #f1f1f1;
        --text-gray: #b8b8b8;
    }
    .status{
         display: flex;
            align-items: center;
        }
        .circle {
            width: 12px;
            height: 12px;
            background-color: #00FF00; 
            border-radius: 50%;
            /* margin-left: 50%; */
            box-shadow: 0 0 8px #00FF00; 
        }
    
    .stockR {
            color: red;
        }
        .section a{
	text-decoration: none ;
	color: #03224c;
	font-size: 1.1em;
	font-weight: 500;
	position: relative;
	display: inline-block;
	border: 2px solid #03224c;
	padding: 10px 30px;
	margin-left: 20%;
	margin-top: 2%;
	z-index: 1;
	overflow: hidden;
	transition: 1s;
}
.section a:hover{
	color: #fff;
	box-shadow:0 0 50px #03224c;
}
.section a::before{
	content: '';
	position: absolute;
	top: 0;
	left: -50px;
	width: 0;
	height: 100%;
	z-index: -1;
	background-color: #03224c;
	transform: skewX(35deg);
	transition: 1s;
}
.section a:hover:before{
	width: 100%;
}
/* style des card */
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

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>
    <!-- Page de style css personnalisé -->
     <link rel="stylesheet" href="http://localhost/Projet_classe/page/style.css">
    <!-- Custom fonts for this template-->
    <link href="http://localhost/Projet_classe/public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="http://localhost/Projet_classe/public/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="http://localhost/Projet_classe/public/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <script src="http://localhost/Projet_classe/public/js/bootstrap.js"></script>
    <script src="http://localhost/Projet_classe/public/js/bootstrap.bundle.js"></script>
    <script src="http://localhost/Projet_classe/public/js/bootstrap.esm.js"></script>
    <script src="http://localhost/Projet_classe/public/js/bootstrap.js.map"></script>
    <!-- particles.js -->
    <script src="https://cdn.jsdelivr.net/npm/particles.js"></script>
    <script src="http://localhost/Projet_classe/page/particles.js"></script>
    <!-- public2 -->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
     
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
    <link href="http://localhost/Projet_classe/public2/css/styles.css" rel="stylesheet" />
    <script src="http://localhost/Projet_classe/public2/js/scripts.js"></script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
<div id="wrapper">
    
