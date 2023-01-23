<?php
ob_start();
?>

<h1>page de la carte</h1>
<?php
$content = ob_get_clean();

require_once("template.php");