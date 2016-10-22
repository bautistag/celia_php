<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$cifra=$_POST['cifra'];
$moneda=$_POST['moneda'];
$valorDolar='1.08855';
$valorYuan='7.3608';
$valorRublo='67.875';
$valorLibra='0.889899';

$longMo=count($moneda);

for($i=0;$i<=$longMo;$i++){
 
    switch ($moneda[$i]){
        
        case dolar:
            $dolar=$cifra * $valorDolar;
            echo "$cifra € = $dolar $ <br>";
             break;
        case yuan:
            $yuan=$cifra * $valorYuan;
            echo "$cifra € = $yuan yuans <br>";
            break;
        case rublo:
            $rublo=$cifra * $valorRublo;
            echo "$cifra € = $rublo rublos <br>";
             break;
         case libra:
            $libra=$cifra * $valorLibra;
            echo "$cifra € = $libra libras <br>";
             break;
    
    }
    
}