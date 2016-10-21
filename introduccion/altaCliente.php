<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$nombre=$_POST[ 'nombre' ];
$apellidos=$_POST[ 'apellidos' ];
$NIF=$_POST[ 'NIF' ];
$email=$_POST[ 'email' ];
$sexo=$_POST[ 'sexo' ];
$ocupacion=$_POST[ 'ocupacion' ];
$provincia=$_POST[ 'provincia' ];

$fichero = fopen("alumnos.csv", "a");
fwrite($fichero,$NIF.",");
fwrite($fichero,$nombre.",");
fwrite($fichero,$apellidos.",");
fwrite($fichero,$email.",");
fwrite($fichero,$sexo.",");
fwrite($fichero,$ocupacion.",");
fwrite($fichero,$provincia.",");
fclose($fichero);