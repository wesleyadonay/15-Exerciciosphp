<?php
class crescente{
	
	public $a;
	public $b;
	

	

function criador($a, $b) {
	$this->a = $a;
	$this->b = $b;
	
	
	

}


function toString(){
	if($this->a   > $this->b ){

		echo "$this->a $this->b";

	}
	elseif ($this->a  < $this->b ){

		echo "$this->b $this->a";

}

	
}



}





$num1 = new crescente();
$num1 -> criador( $_GET['a'],$_GET['b']);



$num1->toString();


?>