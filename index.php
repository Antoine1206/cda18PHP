<?php

include_once 'includes/header.php';
?>

<?php

affichageUneLigne($bonnetPrix[0]);
affichageUneLigne($bonnetPrix[1]);
affichageUneLigne($bonnetPrix[2]);

?>

<br>
<br>

<div class="row">
<div class="col-sm-4" style="background-color:lavender;"><?php affichageUneLigne($bonnetPrix[0]);?></div>

<div class="col-sm-4" style="background-color:green;"><?php affichageUneLigne($bonnetPrix[1]);?></div>

<div class="col-sm-4" style="background-color:red;"><?php affichageUneLigne($bonnetPrix[2]);?></div>

</div>

<br>

<div class="row">
<div class="col-sm-4">
    <div class="card">
  <img src="<?php echo $bonnetPrix[0][0];?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $bonnetPrix[0][1];?></h5>
    <p class="card-text"><?php echo $bonnetPrix[0][2];?></p>
    <a href="#" class="btn btn-primary">ça marche !</a>
    </div>
  </div>
</div>

<div class="col-sm-4">
    <div class="card">
  <img src="<?php echo $bonnetPrix[1][0];?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $bonnetPrix[1][1];?></h5>
    <p class="card-text"><?php echo $bonnetPrix[1][2];?></p>
    <a href="#" class="btn btn-primary">ça marche !</a>
    </div>
  </div>
</div>


<div class="col-sm-4">
    <div class="card">
  <img src="<?php echo $bonnetPrix[2][0];?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $bonnetPrix[2][1];?></h5>
    <p class="card-text"><?php echo $bonnetPrix[2][2];?></p>
    <a href="#" class="btn btn-primary">ça marche !</a>
    </div>
  </div>
</div>
</div>





<div class="text-center">
<a class="btn btn-primary" href="list.php">Voir tous les produits</a>
</div>

<?php

include_once 'includes/footer.php';

?>