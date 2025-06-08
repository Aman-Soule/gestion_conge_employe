<h1 class="text-center">Demande de Conge</h1>
<?php
require_once("fonction/employe.php");
$listeEmployes = getEmployes();

?>

<!-- Contact Section Form-->
<div class="row justify-content-center">
    <div class="col-lg-8 col-xl-7">
        <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="post">
            <!-- Name input-->
            <div class="form-floating mb-3">
                <input class="form-control" id="name" name="dateD" type="date" placeholder="Enter your name..." data-sb-validations="required" />
                <label for="name">Date de debut</label>
                <div class="invalid-feedback" data-sb-feedback="name:required">Une date est requise</div>
            </div>
            <!-- Email address input-->
            <div class="form-floating mb-3">
                <input class="form-control" id="email" type="date" name="dateF" placeholder="name@example.com" data-sb-validations="required,email" />
                <label for="email">Date de fin</label>
                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
            </div>
            <!-- ID -->
            <div class="form-floating mb-3">
                <input class="form-control" id="phone" type="text" name="idE" value="<?= $_SESSION['employe']['idEmploye'] ?>" data-sb-validations="required" />
                <label for="phone">Votre ID</label>
                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
            </div>
             <!-- Nom employe -->
            <div class="form-floating mb-3">
                <input class="form-control" id="phone" type="text" value="<?= $_SESSION['employe']['nomEmploye'] ?>" data-sb-validations="required" readonly />
                <label for="phone">Nom employé</label>
                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
            </div>
            <!-- Message input-->
            <div class="form-floating mb-3">
                <textarea class="form-control" id="message" name="motif" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                <label for="message">Motif</label>
                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
            </div>
            <!-- Submit success message-->
            <!---->
            <!-- This is what your users will see when the form-->
            <!-- has successfully submitted-->
            <div class="d-none" id="submitSuccessMessage">
                <div class="text-center mb-3">
                    <div class="fw-bolder">Form submission successful!</div>
                    To activate this form, sign up at
                    <br />
                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                </div>
            </div>
            <!-- Submit error message-->
            <!---->
            <!-- This is what your users will see when there is-->
            <!-- an error submitting the form-->
            <div class="d-none" id="submitErrorMessage">
                <div class="text-center text-danger mb-3">Error sending message!</div>
            </div>
            <!-- Submit Button-->
            <button class="btn btn-primary " name="action" type="submit" value="ajoutConge">Envoyer</button>
        </form>
    </div>
</div>