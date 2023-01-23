<?php
ob_start();
?>
<div class="container_fluid d-flex align-items-center justify-content-center flex-column">
    <h2>Réservez votre table</h2>
    <form action="" method="POST" class="pe-5 w-50">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="gender">
            <label class="form-check-label" for="gender">
                Madame
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="gender">
            <label class="form-check-label" for="gender">
                Monsieur
            </label>
        </div>
        <div class="mb-3">
            <input type="username" placeholder="Nom et prénom" class="form-control rounded-0 border border-success" id="username" name="username" >
        </div>
        <div class="mb-3">
            <input type="email" placeholder="Email" class="form-control rounded-0 border border-success" id="email" name="email" >
        </div>
        <div class="mb-3">
            <input type="date" placeholder="Choisir la date" class="form-control rounded-0 border border-success" id="date-resa" name="date-resa">
        </div>
        <div class="mb-3">
            <input type="phone" placeholder="Votre numéro de téléphone" class="form-control rounded-0 border border-success" id="phone" name="phone" >
        </div>
        <select class="form-select form-select-sm mb-1 rounded-0 border border-success" aria-label=".form-select-lg example">
            <option selected>Horaire du midi</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>

        <select class="form-select form-select-sm rounded-0 border border-success" aria-label=".form-select-sm example">
            <option selected>Horaire du soir</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
        <div class="mb-3 pt-3">
            <textarea class="form-control rounded-0 border border-success" placeholder="Des allergies ?" id="message" rows="3"></textarea>
            <div id="alllergie_text" class="form-text">Nous vous remercions de saisir "Aucun" si vous n'en avez pas.</div>
        </div>
        <div class="text-center pt-2">
            <button type="submit" class="btn btn-success rounded-0 border border-success">Valider</button>
        </div>
    </form>
</div>
<?php
$content = ob_get_clean();

require_once("template.php");