<?php
// LATE STATIC BINDING
class Sofa{
    protected static string $identity = 'Sofa class';

    public static function identity_test(){
        echo 'self: ' . self::$identity . "<br />";
        //static means that the value of variable will be get in run time
        echo 'static: ' . static::$identity . "<br />";

        echo 'get_class: ' . get_class() . "<br />";
        echo 'get_called_class: ' . get_called_class() . "<br />";
    }

    public function return_indentity(){
        return static::$identity;
    }

}

class Loveseat extends Sofa{
    protected static string $identity = 'Loveseat class';
}

$sofa_test = new Sofa();
$love_seat = new Loveseat();

echo Sofa::identity_test() . "<br />";
echo Loveseat::identity_test() . "<br />";

echo $sofa_test->return_indentity() . "<br />";
echo $love_seat->return_indentity() . "<br />";
echo $sofa_test->return_indentity() . "<br />";
echo get_class($love_seat) . "<br />";