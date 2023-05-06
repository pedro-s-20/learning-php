<?php

    $home_towns = array(
        'Joe' => 'Middletown, NY',
        'Erin' => 'West Chester, PA',
        'Dave' => 'Exton, PA',
        'Brian' => 'Grand Rapids, MI',
    );

    foreach ($home_towns as $person => $town){
        echo "<p>$person lives in $town.</p>";
    }
