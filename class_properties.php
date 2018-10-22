<?php 

class Cars{

	var $wheel_count=4;
	var $Door_count=10;

 function Details(){

	return  "The car has " .$this->Door_count ." Wheels" ;
 
 }
   
}
 
 $bmw = new Cars();
 $mercedes = new Cars();
 echo $bmw->wheel_count."<br>";
 echo $mercedes->Details();
 

 ?>