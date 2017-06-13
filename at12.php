<?php
class num_soma_mult{
	
	public $num;
	public $num2;
	private $res;
	private $total;
	
	

	

function criador($num, $num2) {
	$this->num = $num;
	$this->num2 = $num2;

	
	
	

}


function toString(){
	
	for($this->res = 1; $this->res <= $this->num; $this->res++){

			$this->total += $this->num2;
			
	} 
 
echo $this->total;



}


}


$num1 = new num_soma_mult();
$num1 -> criador($_GET['num'], $_GET['num2'] );



$num1->toString();


?>