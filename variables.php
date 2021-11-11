<?php
$text="hello students";

$x=6;
$y=8;
print $text;
echo"the result of calculating x time y is:".$x*$y;
#global
#local
#static
//example
//$t="5"; //global variable;

function myTest(){
    $t=5.56;//local variable
    //using $t inside here it will generate an error
    echo "<p>variable t inside function is :$t</p>";
}
myTest();
echo "<p>variable t inside function is :$t</p>";
//arrays
$courses=
array("Data Science, Web Programminng,Computer Packages");
var_dump($courses);


?>
