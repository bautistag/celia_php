<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$binario=$_POST[ 'binario' ];
$decimal=0;
$valorposicion=1;

for ($i= strlen($binario)-1;$i>=0;$i--){
    
    $decimal += $valorposicion * $binario[$i];
    $valorposicion *= 2;
    
}
echo $decimal;