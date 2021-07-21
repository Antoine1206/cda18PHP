<?php

function horsTaxe($bonnetPrix2)
{
    return $bonnetPrix2 / 1.2;
} 



function affichageUneLigne($bonnetPrix2)
{
    echo $bonnetPrix2[0].' / ';
    echo horsTaxe($bonnetPrix2[1]).' / ';
    echo $bonnetPrix2[1].' / ';
}

?>