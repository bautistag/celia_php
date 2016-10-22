<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function comprobarNie($documento){
$letraNIE= substr($documento, 8);
$letras="TRWAGMYFPDXBNJZSQVHLCKEO";
$numerosNIE=substr($documento,0,8);
$resultado= $numerosNIE % 23;
$letra= substr ($letras, $resultado, 1);

if($letraNIE == $letra && strlen($documento)==9 && strlen($letraNIE) == 1 && strlen ($numerosNIE) == 8 ){
    return TRUE;
}
}

function comprobarNif($documento){
$letraNIF= substr($documento, 0,1);
$numerosNIF=substr($documento,1,8);
$letras="TRWAGMYFPDXBNJZSQVHLCKEO";
$resultado= $numerosNIF % 23;
$letra= substr ($letras, $resultado, 1);

if($letraNIF == $letra && strlen($documento)==9 && strlen($letraNIF) == 1 && strlen ($numerosNIF) == 8 ){
    return TRUE;
}
}

$documento=$_POST['documento'];
if(comprobarNie($documento)){
    echo "El documento $documento es un NIE";
}elseif (comprobarNif($documento)) {
    echo "El documento $documento es un NIF";
}else
    echo "$documento no es ni NIE ni NIF";