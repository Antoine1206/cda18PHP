<?php
include 'variable.php';
include 'fonctions.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    coucou!

    <?php echo date('d/m/Y H:i:s'); ?>
    <br>
    <?php foreach(['Bonnet en laine', 'Bonnet en laine bio', 'Bonnet en laine et cachemire', 'Bonnet arc-en-ciel'] as $key => $bonnet){
        ?>
        
    <table>
        <thead>
            <tr>
                <th><?= $bonnet.' : '.$prix[$key] .$description?></th>
            </tr>
        </thead>
    </table>
        <?php
    }
    ?>
    <br>
    <?= 'et re-coucou !'; ?>

    <br>
    <?php foreach($bonnetPrix as $key => $bonnetPrix2){
        if ($bonnetPrix2[1] >= 12) 
            $couleur = "green";
        else {
            $couleur = 'red';
        }
        ?>
    <table>
        <thead>
            <tr>
                <th style='color:<?php echo $couleur?>'>
                    <?php echo $bonnetPrix2[0].' : '.horsTaxe($bonnetPrix2[1]).' euros '.' : '.$bonnetPrix2[1].' euros ';
                    echo affichageUneLigne($bonnetPrix2);
                ?></th>
            </tr>
        </thead>
    </table>
        <?php
    }
    ?>
</body>
</html>