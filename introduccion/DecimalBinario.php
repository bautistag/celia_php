<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$numero=$_POST[ 'numero' ];
$binario="";

while($numero>0){
   
    $resto= $numero % 2;
    $binario=$resto.$binario; #Concatenamos el resto delante. (coge el ultimo resultado de la division y
                              # va concatenando los restos de las divisiones porque lo lee alreves)
    $numero = intdiv ($numero,2);
}
echo $binario;

