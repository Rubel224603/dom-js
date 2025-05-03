<?php


$number =10;
var_dump($number);


$text ="Hello Bangladesh";
echo"   <br>";
var_dump($text);
$arr = ['rubel','jhenaidah',25];
echo'<pre>';
print_r($arr);

echo'</pre>';

echo "</br>";

echo $arr[1];

echo '<br>';
$length = sizeof($arr);//count array item;
$count = count($arr);// count arra;
echo $count;
echo $length;
echo '<br>';
for($i=0; $i<=$length;$i++){
    echo $i;
}


echo"<br>";
echo"<br>";
//type casting or convertaing number;
$a= "12";
$a = (int) $a;
var_dump($a);
echo "The String Conversation Number = ".$a."<br>";

var_dump($a);
$n = "23 kilometer";
echo "<br>";
echo intval($n);


echo"<br>";
echo"<br>";


 $givenNumber  = 10.2;
 $givenNumber = (float) $givenNumber;
 var_dump($givenNumber);
 echo $givenNumber;
 echo"<br>";
 echo"<br>";

 $givenNumber = (int) $givenNumber;
 var_dump($givenNumber);

$givenNumber ="ten";
$givenNumber = (string) $givenNumber;
var_dump($givenNumber);

echo "<br>";

class  Car{
    public $color;
    public $model;

    public function __construct($color,$model){
        $this->color= $color;
        $this->model= $model;

    }

    public function message(){
        return "My Car is  a".$this->color .' '. $this->model ."!";

    }


    
}

$objCar = new Car("red","BMW");
$objCar = (array) $objCar;
var_dump($objCar);
echo "<pre>";
print_r($objCar);
echo "<pre>";

echo pi();//retrun pi=3.1416...;
echo "</br>";
echo"Minimum result = ". min(10,20,30,50,60,40);
echo "</br>";
echo"Maximum result = ". max(10,20,30,50,60,40);

echo "</br>";
echo sqrt(16);
echo "</br>";
$roundNumber = 10.5;
echo "Kasakasi number=  " . round($roundNumber);

echo "<br>Genareate random number = ".rand(1,5);

echo "<br>";

define("rubel",120);//constant 
echo rubel;

echo rubel;

echo "<br>";
//sort hand if;
$m=10;
if($m<15) $b="hello";
echo $b;


//sort hand if else;
echo "<br>";
$b = $m<10 ?"hello if else sort hand":"Nothing to do";
echo $b;
?>