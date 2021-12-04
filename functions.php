<?php

// function jab tak call nahi hota hai tab tak execute nahi hota hai chahe
//  wo pehle he kyu na likha hua ho.
function pm($ma){
    $s=0;
    $i=0;
    foreach($ma as $val){
        $s+=$val;
        $i++;
    }
    return $s/$i;
}

$sarthak=[34,43,343,34];
$sm=pm($sarthak);
echo $sm;
//array ki length k liye count() use karo.


?>