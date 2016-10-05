<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function esVocal($vocal) {
    switch ($vocal) {
        case 'a':
        case 'e':
        case 'i':
        case 'o':
        case 'u':
        
        return TRUE;
    }
    return FALSE;   
}


function sustituyeLetra($frase,$letra){
   for($i=0 ; $i< strlen($frase);$i++) {
        if (esVocal($frase[$i])){
            echo $letra;
        
        }else
            echo ($frase[$i]);
    }
}


function cuentaVocales($frase){
    $vocales = 0;
    for ($i=0; $i<strlen($frase);$i++){
        if (esVocal($frase[$i])) {
            $vocales++;
        }
    }
    return $vocales;
}
