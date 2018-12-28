<?php
    $hoy = getdate();
    $d=$hoy["mday"];
    $m=$hoy["mon"];
    $y=$hoy["year"];
    $h=$hoy["hours"];
    $mi=$hoy["minutes"];
    $s=$hoy["seconds"];
 
    $dateday ="$m/$d/$y $h:$mi:$s";
?>