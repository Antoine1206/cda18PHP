<?php

include_once 'includes/header.php';
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

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