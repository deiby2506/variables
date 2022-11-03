<?php
$n1 = 1;
$n2 =7;
$contador = 0;
while ($n1 <= $n2) {
    if ($n2%$n1==0) {
        $contador++;
    }
    $n1++;
}
if ($contador==1 or $contador==2) {
    echo $n2."primo";
}else {
    echo $n2."no es primo";
}
?>