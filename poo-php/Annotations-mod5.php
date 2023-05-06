<?php
class Sofa{
    public static int $instance_count = 0;

    public $seats = 3;
    public $arms = 2;
/*
    public function __construct($seats=3, $arms=2){
        self::$instance_count++;
        $this->seats = $seats;
        $this->arms = $arms;
    }
*/
    public function __construct($args=[]){
        self::$instance_count++;
        $this->seats = $args['seats'] ?? $this->seats;
        $this->arms = $args['arms'] ?? NULL;
    }

    //é chamado automaticamente ao final da execução do script php
    public function __destruct(){
        self::$instance_count--;
    }

    public function __clone(){
        self::$instance_count++;
    }

}

class Couch extends Sofa{
    var $arms = 0;
}

class Loveseat extends Sofa{
    var $seats = 2;
}

$sofa = new Sofa(['seats' => 3, 'arms' => 2]);
echo 'Sofa<br />';
echo '- seats: ' . $sofa->seats . '<br />';
echo '- arms: ' . $sofa->arms . '<br />';
echo '<br />';

unset($sofa);

$couch = new Couch(['seats' => 4]);
echo 'Couch<br />';
echo '- seats: ' . $couch->seats . '<br />';
echo '- arms: ' . $couch->arms . '<br />';
echo '<br />';

$loveseat = new Loveseat(['arms' => 0]);
echo 'Loveseat<br />';
echo '- seats: ' . $loveseat->seats . '<br />';
echo '- arms: ' . $loveseat->arms . '<br />';
echo '<br />';

echo Sofa::$instance_count . '<br />';