<?php
$n1 = 1;
$n2 =1;
$contador = 0;
while ($n2<= 100) {
    while ($n1 <= $n2) {

        if ($n2%$n1==0) {
            $contador++;
        }
        $n1++;    
    }
    $n1=1;
    if ($contador==1 or $contador==2) {
        echo $n2." ";
        
    }
    $n2++;
    $contador = 0;
}
?>