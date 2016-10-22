<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function potencia($numero,$exponente){
    $resultado=pow ($numero,$exponente); ##pow funcion predeterminada que ya te saca la potencia
    return $resultado;
}

echo "<table border=3>";

for($i=1;$i<=4;$i++){
    echo "<tr>";
    for($j=1;$j<=4;$j++){
        echo "<td>";
        echo potencia($i,$j); #Llamada a la funcion potencia creada a partir de pow
        echo"</td>";
        
    }
    echo "</tr>";
}

echo "</table>";