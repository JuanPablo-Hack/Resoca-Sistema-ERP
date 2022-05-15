<?php

$pizza  = "porción1,porción2,porción3,porción4,porción5";
$porciones = explode(",", $pizza);
echo $porciones[0]; // porción1
echo $porciones[1]; // porción2
