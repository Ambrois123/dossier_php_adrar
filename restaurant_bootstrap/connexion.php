<?php
ob_start();
?>

<div class="container_fluid d-flex align-items-center justify-content-center flex-column pt-5">
    <h2>Page de connexion</h2>
<form action="" method="POST" class="p-5 w-50">
  <div class="mb-3">
    <label for="email" class="form-label">Email :</label>
    <input type="email" class="form-control rounded-0 border border-success" id="email" name="email" >
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Mot de passe :</label>
    <input type="password" class="form-control rounded-0 border border-success" id="password" name="password">
  </div>
  <div class="text-center">
    <button type="submit" class="btn btn-success rounded-0 border border-success">Valider</button>
  </div>
</form>
</div>

<?php
$content = ob_get_clean();

require_once("template.php");