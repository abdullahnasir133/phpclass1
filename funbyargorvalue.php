<?php

function testing(&$string){
    $string .= "And something extra";
    return $string;  // Return the modified string
}

$str = "this is a string ";
$str = testing($str);  // Assign the returned modified string to $str
echo "$str<br>" ;  // Output: "this is a string And something extra"


function first($num){
    $num += 5;
}


function second(&$num){
    $num += 7;
}
$number = 10;
first($number);
echo "orignal value is $number <br>";

second($number);
echo "orignal value is $number <br>";


?>
