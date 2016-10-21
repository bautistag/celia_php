<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$frase= $_POST['frase'];
$acumulador=0;

for($i=0 ; $i< strlen($frase) ;$i++) {
    if(preg_match('/[aeiou]/i',$frase[$i])){
        $acumulador++;
    }   
}
echo "El numero de vocales es = $acumulador";


##OTRA FORMA DE HACERLO CON SWITCH

/*for($i=0 ; $i< strlen($frase) ;$i++) {
    switch ($frase[$i]) {
        case 'a':
        case 'e':
        case 'i':
        case 'o':
        case 'u':
        
        $acumulador++;

        break;
    }
}
 * 
 */
