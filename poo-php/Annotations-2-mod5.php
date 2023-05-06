<?php
class Bevarage{

    public string $name;
    function __construct(){
        echo "New bevarage was created. <br />";
    }

    function __clone(){
        echo "Existing beverage was copied. <br />";
    }

}

$a = new Bevarage;
$a->name = "coffee";
echo $a->name .'<br />';

echo '<hr />';

$b = clone $a;
echo $a->name . '<br />';
echo $b->name . '<br />';

$b->name = 'tea';
echo $a->name . '<br />';
echo $b->name . '<br />';

$c = $b;
$c->name = 'Orange juice';
echo $a->name . '<br />';
echo $b->name . '<br />';
echo $c->name . '<br />';

$num1 = 1;
// 1 - aqui é feito clone
$num2 = $num1;
$num1 = 2;
echo $num2;

$num1 = 1;
// 1 - aqui é passado o espaço de memória
$num2 = &$num1; // ou $num2 =& $num1;
$num1 = 2;
echo $num2;

class Box {
    public $name="box";
    public $name1="box1";
    public $name2="box2";
    public $name3="box3";
    public $name4="box4";
}

$box = new Box;

$box_reference = $box;

$box_clone = clone $box;

$box_modified = clone $box;
$box_modified->name = "changed box";

$another_box = new Box;

echo "<hr />";
// == is casual and just checks if all property values are equal
echo 'Reference: ' . ($box == $box_reference ? 'T' : 'F') . '<br />';
echo 'Cloned: ' . ($box == $box_clone ? 'T' : 'F') . '<br />';
echo 'Modified: ' . ($box == $box_modified ? 'T' : 'F') . '<br />';
echo 'Another: ' . ($box == $another_box ? 'T' : 'F') . '<br />';

echo "<hr />";

// === is strict and checks if they reference the same object
echo 'Reference: ' . ($box === $box_reference ? 'T' : 'F') . '<br />';
echo 'Cloned: ' . ($box === $box_clone ? 'T' : 'F') . '<br />';
echo 'Modified: ' . ($box === $box_modified ? 'T' : 'F') . '<br />';
echo 'Another: ' . ($box === $another_box ? 'T' : 'F') . '<br />';
echo "<hr />";



function my_autoload($class){
    if(preg_match('/\A\w+\Z/', $class)){
        include 'classes/' . $class . '.class.php';
    }
}

spl_autoload_register('my_autoload');