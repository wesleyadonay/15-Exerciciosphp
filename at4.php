<?php
class calc{
	
	public $a;
	public $b;
	public $c;
	public $d;

	

function criador($a, $b, $c, $d) {
	$this->a = $a;
	$this->b = $b;
	$this->c = $c;
	$this->d = $d;
	
	

}


function toString(){
	if(($this->a + $this->d )  > ($this->b * $this->c )){

		echo "A+D é maior que B*C!";

	}
	elseif (($this->a + $this->d )  < ($this->b * $this->c )) {
		
		echo "A+D é menor que B*C!";
	}



	else{

		echo "A+D é igual a B*C!";
	}
}



}





$num1 = new calc();
$num1 -> criador( $_GET['a'],$_GET['b'], $_GET['c'], $_GET['d']);



$num1->toString();


?>