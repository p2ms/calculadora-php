<?php


function msg($mensagem){
    echo "<h1>".$mensagem."</h1>";
}

function acresc($mont,$acres){
    $resul = $mont + $acres;
    msg($resul);
    return $resul;
}

function desconto($mont,$desc){
    $resul = $mont* (1-($desc/100));
    msg($resul);
}

$total=acresc(985,15);
desconto($total,50);
msg("bona noite");
msg("oi")


?>