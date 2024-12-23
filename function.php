<?php

function sum($math , $eng, $sc){
    $S = $math + $eng + $sc;
   
    return $S;
}
function percentage($st){
    $per = $st / 3;


    echo $per;
}

$total = sum(55,65,88);
echo "$total</br>";

percentage($total);

?>