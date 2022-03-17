<?php

//Increment
echo "Increment Start<br>";
for ($i=10000; $i <=10050 ; $i++) { 
    echo "$i<br>";
}
echo "Increment Stop<br><br><br>";


//Decrement
echo "Decrement Start<br>";
for ($i=10000; $i >=9950 ; $i--) { 
    echo "$i<br>";
}
echo "Decrement Stop<br><br>";

//Divided By 3 & 4

for ($i=1; $i<=500 ; $i++) {
    if($i%3==0 && $i%4==0){
        echo "$i divided by 3 & 4 <br>";
    }
}
echo "<br> <br>";


//exit if any number divided by 11

for ($i=1; $i <=1000 ; $i+=3) { 
    if($i%11==0){
        echo "$i divided by 11 & that's why program stop working.";
        break;
    }
    else {
        echo "$i <br>";
    }
}

?>