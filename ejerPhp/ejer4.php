<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
####falta utilizar class##########
$numero=0;
echo "<table border=3>";
for ($i=0;$i<=9;$i++){
       if ($i % 2 == 0){
      echo "<tr bgcolor=#A9BCF5>";
       }else{
      echo "<tr>";
       }  
    for ($j=0;$j<=9;$j++){
        echo "<td>";
        echo $numero += 1;
        echo "</td>";
    }
    echo "</tr>";

}
echo "</table>";