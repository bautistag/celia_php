<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$serie=$_POST[ 'serie' ];

$vector= explode(":", $serie);

echo "El numero mayor es: ";
echo max($vector);