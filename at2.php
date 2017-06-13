<?php
class Maior_10{
	
	public $numero;
	

function criador($numero){
	$this->numero = $numero;
	
	

}
function toString(){
	if($this->numero  >= 10){

		echo "Numero maior ou igual a 10!";

	}
	else{

		echo "Numero não é maior ou igual a 10!";
	}
}



}





$num1 = new Maior_10();
$num1 -> criador( $_GET['num']);


$num1->toString();


?>