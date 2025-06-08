   <style>
        /* Style général du footer */
        .dark-footer {
            background-color: #121212;
            color: #e0e0e0;
            padding: 50px 0 20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            box-shadow: 0 -5px 15px rgba(0, 0, 0, 0.3);
            margin-top: 50px;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            padding: 0 20px;
        }

        .footer-section h3 {
            color: #ffffff;
            font-size: 1.3rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-section h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 2px;
            background-color: #4a90e2;
        }

        .footer-section p {
            margin-bottom: 15px;
            line-height: 1.6;
        }

        .footer-links {
            list-style: none;
            padding: 0;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: #b0b0b0;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: #4a90e2;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-links a {
            color: #e0e0e0;
            background-color: #252525;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
        }

        .social-links a:hover {
            background-color: #4a90e2;
            transform: translateY(-3px);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            margin-top: 30px;
            border-top: 1px solid #252525;
            color: #888;
            font-size: 0.9rem;
        }

        /* Effet de survol pour les liens */
        .hover-effect {
            transition: transform 0.3s;
            display: inline-block;
        }

        .hover-effect:hover {
            transform: translateX(5px);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .footer-container {
                grid-template-columns: 1fr;
            }
            
            .footer-section {
                margin-bottom: 30px;
            }
        }
    </style>
 <footer class="dark-footer mt-6">
     <div class="footer-container">
         <div class="footer-section">
             <h3>À propos</h3>
             <p>Notre projet PHP offre des solutions innovantes pour vos besoins en développement web. Nous combinons performance et élégance.</p>
             <div class="social-links">
                 <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                 <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                 <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                 <a href="#" aria-label="GitHub"><i class="fab fa-github"></i></a>
             </div>
         </div>

         <div class="footer-section">
             <h3>Liens rapides</h3>
             <ul class="footer-links">
                 <li><a href="index.php" class="hover-effect">Accueil</a></li>
                 <li><a href="services.php" class="hover-effect">Services</a></li>
                 <li><a href="portfolio.php" class="hover-effect">Portfolio</a></li>
                 <li><a href="blog.php" class="hover-effect">Blog</a></li>
                 <li><a href="contact.php" class="hover-effect">Contact</a></li>
             </ul>
         </div>

         <div class="footer-section">
             <h3>Services</h3>
             <ul class="footer-links">
                 <li><a href="#" class="hover-effect">Développement Web</a></li>
                 <li><a href="#" class="hover-effect">Applications PHP</a></li>
                 <li><a href="#" class="hover-effect">Bases de données</a></li>
                 <li><a href="#" class="hover-effect">Sécurité</a></li>
                 <li><a href="#" class="hover-effect">Maintenance</a></li>
             </ul>
         </div>

         <div class="footer-section">
             <h3>Contact</h3>
             <p><i class="fas fa-map-marker-alt"></i> Rue OKM 88, Ouakam, Dakar, Sénégal</p>
             <p><i class="fas fa-phone"></i> +221 78 753 76 88</p>
             <p><i class="fas fa-envelope"></i> amansoule9@gmail.com</p>
         </div>
     </div>

     <div class="footer-bottom">
         <p>&copy; <?php echo date("Y"); ?> Mon Projet PHP AMAN SOULE. Tous droits réservés.</p>
     </div>
 </footer>
 </div>


 <!-- Bootstrap core JavaScript-->
 <script src="http://localhost/Projet_classe/public/vendor/jquery/jquery.min.js"></script>
 <script src="http://localhost/Projet_classe/public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 <!-- Core plugin JavaScript-->
 <script src="http://localhost/Projet_classe/public/vendor/jquery-easing/jquery.easing.min.js"></script>

 <!-- Custom scripts for all pages-->
 <script src="http://localhost/Projet_classe/public/js/sb-admin-2.min.js"></script>

 <!-- Page level plugins -->
 <script src="vendor/chart.js/Chart.min.js"></script>

 <!-- Page level custom scripts -->
 <script src="http://localhost/Projet_classe/public/js/demo/chart-area-demo.js"></script>
 <script src="http://localhost/Projet_classe/public/js/demo/chart-pie-demo.js"></script>
 <script src="http://localhost/Projet_classe/public/vendor/datatables/jquery.dataTables.min.js"></script>
 <script src="http://localhost/Projet_classe/public/vendor/datatables/dataTables.bootstrap4.min.js"></script>

 <!-- Page level custom scripts -->
 <script src="http://localhost/Projet_classe/public/js/demo/datatables-demo.js"></script>
 <script>
     function ajoutArticle() {
         let form = document.getElementById('formAjout');
         form.removeAttribute("hidden");
     }

     function ajoutEmploye() {
         let form = document.getElementById('formAjout');
         form.removeAttribute("hidden");
     }

     function ajoutService() {
         let form = document.getElementById('formAjout');
         form.removeAttribute("hidden");
     }

     function ajoutConge() {
         let form = document.getElementById('formConge');
         form.removeAttribute("hidden");
     }
 </script>
 <script src="http://localhost/Projet_classe/public/js/bootstrap.js"></script>
 <script src="http://localhost/Projet_classe/public/js/bootstrap.bundle.min.js"></script>
 <script src="http://localhost/Projet_classe/public/js/bootstrap.min.js"></script>
 <script src="http://localhost/Projet_classe/public/js/bootstrap.js"></script>
 <script src="http://localhost/Projet_classe/public/js/bootstrap.bundle.min.js"></script>
 <script src="http://localhost/Projet_classe/public/js/bootstrap.min.js"></script>

 </body>

 </html>