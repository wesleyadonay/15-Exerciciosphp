<?php
class Pos_neg{
	
	public $numero;
	

function criador($numero){
	$this->numero = $numero;
	
	

}
function toString(){
	if($this->numero  > 0){

		echo "Numero Positivo!";

	}
	elseif ($this->numero < 0) {
		
		echo "Numero Negativo!";
	}



	else{

		echo "Numero igual a ZERO!";
	}
}



}





$num1 = new Pos_neg();
$num1 -> criador( $_GET['num']);


$num1->toString();


?>