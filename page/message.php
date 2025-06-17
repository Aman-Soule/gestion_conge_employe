<!-- Ce fichier je l'ai créer pour stocker les boites modal dans des variables, pour rendre le fichier index plus lisible -->
<?php

    $connect_reussi = '
        <div class="modal fade" id="loginExistModal" tabindex="-1" aria-labelledby="loginExistModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-primary text-white">
                            <h5 class="modal-title" id="loginExistModalLabel">Connexion réussi</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Ce congé a été refusé.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        </div>
                    </div>
                </div>
            </div>
            <script>
            document.addEventListener("DOMContentLoaded", function() {
                var myModal = new bootstrap.Modal(document.getElementById("loginExistModal"));
                myModal.show();
            });
            </script>
    ';

    $connect_echoue = '
                    <div class="modal fade" id="loginExistModal" tabindex="-1" aria-labelledby="loginExistModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header bg-danger text-white">
                                <h5 class="modal-title" id="loginExistModalLabel">Login ou mot de passe incorrect !</h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                                Le nom d utilisateur ou le mot de passe est incorrect, veillez ressayer
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                document.addEventListener("DOMContentLoaded", function() {
                    var myModal = new bootstrap.Modal(document.getElementById("loginExistModal"));
                    myModal.show();
                });
                </script>
            ';

?>