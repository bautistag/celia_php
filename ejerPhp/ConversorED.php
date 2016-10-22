<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$euros=$_POST[ 'euros' ];
$valorDolar='1.08855';


$dolar=$euros * floatval($valorDolar);



echo "$euros € = $dolar $";

