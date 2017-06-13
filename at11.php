<?php
class num_inter{
	
	public $num;
	public $num2;
	private $res;
	
	

	

function criador($num, $num2) {
	$this->num = $num;
	$this->num2 = $num2;

	
	
	

}


function toString(){
	
	for($this->res = $this->num + 1; $this->res <= $this->num2-1; $this->res++){

			echo $this->res, "<br>";
			
	} 
 




}


}


$num1 = new num_inter();
$num1 -> criador($_GET['num'], $_GET['num2'] );



$num1->toString();


?>