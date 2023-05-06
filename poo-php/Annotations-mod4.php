<?php
// by default the visibility modifiers is public for properties and methods
// always declare modifiers, not defaults
// public only if is necessary
class Student {
    public static array $grades = ['Freshman', 'Sophomore', 'Junior', 'Senior'];
    private static int $total_students = 0;

    public static function motto(){
        return "To learn PHP OOP!";
    }

    public static function count(){
        return self::$total_students;
    }

    public static function add_student(){
        self::$total_students++;
    }
}

echo Student::$grades[0] . "<br />";
echo Student::motto() . "<br />";
//echo Student::$total_students . "<br />";  ERROR
echo Student::count() . "<br />";
Student::add_student();
echo Student::count() . "<br />";

//Static properties and methos are inherited
class PartTimeStudent extends Student{
}

echo PartTimeStudent::$grades[0] . "<br />";
echo PartTimeStudent::motto() . "<br />";

// Changes are shared too
PartTimeStudent::$grades[] = 'Alumni';
echo implode(', ', Student::$grades) . "<br />";

Student::add_student();
Student::add_student();
Student::add_student();
Student::add_student();
PartTimeStudent::add_student();
echo PartTimeStudent::count() . "<br />";
echo Student::count() . "<br />";
