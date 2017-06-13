<?php
class num_laco{
	
	public $num;
	private $res;
	
	

	

function criador($num) {
	$this->num = $num;

	
	
	

}


function toString(){
	
	for($this->res = 0;$this->res <= $this->num; $this->res++){

			echo  $this->res, "<br>";
	} 

	
		
	


}



}





$num1 = new num_laco();
$num1 -> criador($_GET['num']);



$num1->toString();


?>