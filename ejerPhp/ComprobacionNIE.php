<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$nie=$_POST['nie'];

$letraNIE= substr($nie, 8);
 #echo $letraNIE;
$numerosNIE=substr($nie,0,8);
 #echo $numerosNIE;

$letras="TRWAGMYFPDXBNJZSQVHLCKEO";

$resultado= $numerosNIE % 23;

$letra= substr ($letras, $resultado, 1);

if($letraNIE == $letra && strlen($nie)==9 && strlen($letraNIE) == 1 && strlen ($numerosNIE) == 8 ){
    echo "El NIE $nie es correcto";
}else
    echo "El NIE $nie no es correcto";
