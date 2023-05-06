<?php

    $ant1 = 0;
    $ant2 = 1;
    $atual = 0;

    do{
        $ant1 = $ant2;
        $ant2 = $atual;
        $atual = $ant1 + $ant2;
        if($atual < 200) {
            echo "<p>$atual</p>";
        }
    }while($atual < 200);
