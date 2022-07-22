<?php
// variabile con paragrafo

$parConst = 'I Draghi sono potenti creature magiche. Esistono sono molti tipi di draghi, ma i più comuni sono i draghi metallici e i draghi cromatici. 
			I Draghi sono tra le razze più antiche delle Flanaess e solo poche specie possono affermare di vivere più a lungo di loro.';
//uso explode per delimitarlo
var_dump($parConst);
$delPar = '.';
explode($delPar, $parConst);
var_dump(explode($delPar, $parConst));
?>