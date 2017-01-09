<?php

function acakangkahuruf($panjang)
{
    $karakter   = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $string     = '';
    $panjang    = 5;
    
    for ($i = 0; $i < $panjang; $i++) {
        $pos = rand(0, strlen($karakter)-1);
        $string .= $karakter{$pos};
    }


    return $string;
}
?>