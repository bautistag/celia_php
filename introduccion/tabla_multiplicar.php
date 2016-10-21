<?php

//Todas las tablas



/*for ($i = 1; $i <= 10; $i++){
    for ($j = 1; $j <=10; $j++){
        echo "$i x $j = ".($i*$j);

    }
    
}
*/

//Solo la tabla del 7

$numero= $_POST['numero'];
for ($i = 1; $i <= 10; $i++){
    echo "$numero x $i = ".$numero*$i."</br>";
}

