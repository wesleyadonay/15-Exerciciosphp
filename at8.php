<?php
class salario{
	
	public $s;
	private $res;
	
	

	

function criador($s) {
	$this->s = $s;

	
	
	

}


function toString(){
	
	 

	if($this->s  <= 300){

		
		$this->res = $this->s*1.5;
		
		echo "O novo salario é: $this->res";

	}
	else  {
			
		$this->res = $this->s*1.3;
		
		echo "O novo salario é: $this->res";
	}


}



}





$num1 = new salario();
$num1 -> criador($_GET['s']);



$num1->toString();


?>