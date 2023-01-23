<?php
ob_start();
?>
<div class="container-fluid">
    <div class="text-center pb-5">
        <h1>Bienvenue au restaurant</h1>
    </div>
<div class="container-md text-center gx-5">
    <h2 class="pb-5">Les incontournables du chef</h2>
  <div class="row">
    <div class="col ">
        <div class="card" style="width: 18rem; height:10rem">
            <img src="./images/burger.jpg" class="img-thumbnail" alt="...">
        </div>
    </div>
    <div class="col ">
        <div class="card" style="width: 18rem; height:10rem">
            <img src="./images/steak.jpg" class="img-thumbnail" alt="...">
        </div>
    </div>
    <div class="col ">
        <div class="card" style="width: 18rem; height:10rem">
            <img src="./images/crevettes.jpg" class="img-thumbnail" alt="...">
        </div>
    </div>
    <div class="col ">
        <div class="card" style="width: 18rem; height:10rem">
            <img src="./images/pates.jpg" class="img-thumbnail" alt="...">
        </div>
    </div>
  </div>
</div>
</div>
<?php
$content = ob_get_clean();

require_once("template.php");