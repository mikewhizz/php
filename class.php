<?php

class Cars{
    public $color;
    public $model;
    public function


    __construct($color, $model)
    {
        $this ->color=$color;
        $this->model=$model;
    }
    public function message(){
        return "My car is a : " . $this->color. " " .  $this->model."!";
    }
}

$myCar= new Cars("black" ,"Volvo");
echo $myCar -> message();
echo "<br>";

$myCar=new Cars("red" ,"Toyota");
echo $myCar -> message();
#learn to deal with strings and its functions
#learn to deal with number and maths
#learn to handle constants and operators
#learn to use conditional statements in php

?>