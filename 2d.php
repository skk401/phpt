<?php
$multidim=array(
array(2,5,7,8),
array(2,56,77,88),
array(22,55,76,87,87)
);
echo var_dump($multidim);
echo "<br>";
echo $multidim[1][2];
echo "<br>";
for($i=0;$i<count($multidim);$i++){
    echo var_dump($multidim[$i]);
    echo "<br>";
}
for($i=0;$i<count($multidim);$i++){
    for($j=0;$j<count($multidim[$i]);$j++){
    echo $multidim[$i][$j] ."  ";
    
    }
    echo "<br>";
}


?>