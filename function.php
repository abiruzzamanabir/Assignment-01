<?php


/**
 * Grade & GPA
 */
function getResult($marks){

if($marks>=80 && $marks<=100){
    echo "You Got A+ & your Grade is 5.00";
}
else if($marks>=70 && $marks<=79){
    echo "You Got A & your Grade is 4.40";
}
else if($marks>=60 && $marks<=69){
    echo "You Got A- & your Grade is 3.50";
}
else if($marks>=50 && $marks<=59){
    echo "You Got B & your Grade is 3.00";
}
else if($marks>=40 && $marks<=49){
    echo "You Got C & your Grade is 2.00";
}
else if($marks>=33 && $marks<=39){
    echo "You Got D & your Grade is 1.00";
}
else if($marks>=0 && $marks<=32){
    echo "You Got F";
}
else{
    echo "Please Enter Valid Number";
}
}

/**
 * Rectangle Square Circle
 */

function getArea($type=null, $length , $height){
    $area="";
    $area_type="";

    switch ($type) {
        case 'r':
            $area= $length * $height;
            $area_type="Rectangle";
            break;
        case 's':
            $area= $length * $length;
            $area_type="Square";
            break;
        case 'c':
            $area= 3.1416*($length * $length);
            $area_type="Circle";
            break;
        
        default:
            echo "Something Went Wrong.";
            break;
    }

    echo "Area of {$area_type} is {$area}";
}

/**
 * Age Calculator
 */

function checkAge($birthYear){
    $age=2022-$birthYear;
    return "Your birth year {$birthYear} & now you're {$age} years old.";
}


?>