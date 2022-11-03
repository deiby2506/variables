<?php
$n3 = 0;
$n4 = 1;
$n5 = $n3 + $n4;
echo $n4." ";

while ($n5<=100) {
    $n5 = $n3 + $n4;
    $n3 = $n4 ;
    $n4 =  $n5;
    echo $n5." ";

}


/*  while(condicion){
    resultado de la condicion
} */
    /*$n1 = 1;
    while ($n1<=5) {
        echo "sena ";
        echo "<br>";
        $n1 = $n1 +1;
        $n1 += 1;
        $n1++; 
    }*/
    /* $n2 = 0;
    while ($n2<=100) {
        echo $n2." ";
        $n2 += 2;
        $n2++; 
    } */
    /*  while ($n4 == 0) {
        echo $n4." ";
        $n3++;
    } */
?>