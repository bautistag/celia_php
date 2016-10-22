<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$nif=$_POST['nif'];

$letraNIF= substr($nif, 0,1);
 #echo $letraNIF;
$numerosNIF=substr($nif,1,8);
#echo $numerosNIF;

$letras="TRWAGMYFPDXBNJZSQVHLCKEO";

$resultado= $numerosNIF % 23;

$letra= substr ($letras, $resultado, 1);

if($letraNIF == $letra && strlen($nif)==9 && strlen($letraNIF) == 1 && strlen ($numerosNIF) == 8 ){
    echo "El nif $nif es correcto";
}else
    echo "El ni $nif no es correcto";
    
