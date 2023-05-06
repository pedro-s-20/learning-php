<?php
// by default the visibilyt modifiers is public for properties and methods
// always declare modifiers, not defaults
// public only if is necesssary
class Student {
    public $first_name;
    public $last_name;
    public $country = 'None';

    protected $registration_id;
    private $tuition = 500.00;


    public function full_name(){
        return $this->first_name . " " . $this->last_name;
    }

    public function say_hello_world(){
        return "Hello world!";
    }

    protected function say_hello_family(){
        return "Hello family!";
    }

    private function say_hello_me(){
        return "Hello me!";
    }

    public function tuition_fmt(){
        return '$' . $this->tuition;
    }

    /**
     * @param float $tuition
     */
    public function setTuition($tuition)
    {
        $this->tuition = $tuition;
    }

    /**
     * @return float
     */
    public function getTuition()
    {
        return $this->tuition;
    }
}


class PartTimeStudent extends Student{
    public function say_hello_parent(){
        return $this->say_hello_family();
    }
}

$student1 = new Student;
$student1->first_name = 'Lucy';
$student1->last_name = 'Ricardo';
echo $student1->full_name() . "<br />";
echo $student1->say_hello_world() . "<br />";

$student1 = new PartTimeStudent;
echo $student1->say_hello_parent() . "<br />";

$student2 = new Student;
$student2->first_name = 'Ethel';
$student2->last_name = 'Mertz';
echo $student2->full_name() . "<br />";

//overloading - dynamic propertires
//a referencia adicionada de forma dinamica é diferenta da que contem o atributo da classe
/*
$student1->tuition = 1000;
echo $student1->tuition . '<br />';
*/
echo $student1->tuition_fmt() . '<br />';