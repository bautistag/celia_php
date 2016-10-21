<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'lib/utilidades.php';

$frase= $_POST['frase'];

$vocales="aeiou";

for($i=0;$i<strlen($vocales);$i++){
echo sustituyeLetra($frase,$vocales[$i]);
echo '</br>';
}