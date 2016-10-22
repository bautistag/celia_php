<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$numero=0;
echo "<table border=3>";
for ($i=1;$i<=10;$i++){
    echo "<tr>";
    
    for ($j=1;$j<=10;$j++){
        echo "<td>";
        echo $numero += 1;
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";