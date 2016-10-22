<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$dni=$_POST['dni'];
$letras="TRWAGMYFPDXBNJZSQVHLCKEO";


$resultado= $dni % 23;

$letraDNI= substr ($letras, $resultado, 1); ##La funcion substr(cadena,laPosicion,si lo quieres ej.de 1 en 1)

echo "El dni completo es: $dni.$letraDNI";