<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$frase= $_POST['frase'];

$fraseInvertida= strrev($frase);

if ($frase == $fraseInvertida) {
    echo "La frase $frase es capicua";
}else 
    echo "La frase $frase no es capicua";