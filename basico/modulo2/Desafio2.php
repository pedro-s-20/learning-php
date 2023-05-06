<?php
    $min = 1;
    $max = 50;
    $guess = 4; //Change this value to test!
    $continue = true;
//    $num = 16; //Change this value to test!

// If you really want to go nuts, try this:
    $num = rand($min, $max);

    do{
        echo "Guess a number between  $min and $max: ";
        $guess = readline();
        if ($guess == $num) {
            echo "Congrats! You got the number right: $num!";
            $continue = false;
        } else if ($guess >= $num) {
            echo 'Not that one, it\'s a smaller number. Continue? [type "t" or "f"] : ';
            (readline() == 't') ? : ($continue = false);
        } else {
            echo 'Not that one, it\'s a bigger number. Continue? [type "t" or "f"] : ';
            (readline() == 't') ? : ($continue = false);
        }
    }while($continue);
    echo ' Thanks for using the program!';