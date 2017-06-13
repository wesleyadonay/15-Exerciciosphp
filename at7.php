<?php
class PesoIdeal{
	
	public $altura;
	public $sexo;
	private $res;
	
	

	

function criador($altura, $sexo) {
	$this->altura = $altura;
	$this->sexo = $sexo;
	
	
	

}


function toString(){
	
	 

	if($this->sexo  == "F"){

		
		$this->res = (62.1 * $this->altura) - 44.7;
		
		echo "O peso ideal é: $this->res";

	}
	else if ($this->sexo  == "M") {
			
		$this->res = (72.7 * $this->altura) - 58;
		echo "O peso ideal é: $this->res";
	}


}



}





$num1 = new PesoIdeal();
$num1 -> criador( $_GET['h'],$_GET['sexo']);



$num1->toString();


?>