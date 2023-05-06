<?php

// os nomes de classes são cases insesitives (tanto faz maiúsculas ou minísculas
class Student {
    var $first_name;
    var $last_name;
    var $country = 'None';

    function say_hello(){
        return "Hello world!";
    }

    function full_name(){
        return $this->first_name . " " . $this->last_name;
    }

}

$student1 = new Student;
$student1->first_name = 'Lucy';
$student1->last_name = 'Ricardo';

echo $student1->say_hello() . "<br />";

$class_methods = get_class_methods('Student');
echo "Class methods: " . implode(', ', $class_methods) . "<br />";

if(method_exists('Student', 'say_hello')){
    echo "The Student have the methods say_hello";
}

echo $student1->full_name() . "<br />";

$student2 = new Student;
$student2->first_name = 'Ethel';
$student2->last_name = 'Mertz';
echo $student2->say_hello() . "<br />";

echo $student1->first_name . " " . $student1->last_name . "<br />";
echo $student2->first_name . " " . $student2->last_name . "<br />";

//default values
$class_vars = get_class_vars('Student') . "<br />";
echo "Class vars: <br/>";
echo "<pre>";
print_r($class_vars);
echo "</pre>";

$object_vars = get_object_vars($student1) . "<br />";
echo "Object vars: <br/>";
echo "<pre>";
print_r($object_vars);
echo "</pre>";

//current values
echo get_object_vars($student1) . "<br />";

//mixed is class or object
//echo property_exists($mixed, $string);

echo get_class($student1) . "<br />";

// Useful functions:

//get_class($object);
//is_a($object, string);

//$classes = get_declared_classes();
//echo "Classes: " . implode(', ', $classes) . "<br />";

$classes_names = ['Product', 'Student', 'student'];
foreach($classes_names as $class_name){

    if(is_a($student1, $class_name)){
        echo "student1 is a class {$class_name}. <br />";
    }else{
        echo "student1 is not a class {$class_name}. <br />";
    }

    /*
    if(class_exists($class_name)){
        echo "{$class_name} is a declared class. <br />";
    }else{
        echo "{$class_name} is a not declared class. <br />";
    }*/
}
