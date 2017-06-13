<?php
class num_string{
	
	public $c;
	private $i;
	private $total;
	
	

	

function criador($c) {
	$this->c = $c;

	
	
	

}


function toString(){
	

	$this->total = $this->c;
	echo "O total de caractere é: ", strlen($this->total), "<br>";

	for($this->i = 1; $this->i < strlen($this->total); $this->i++){

		echo $this->i, "<br>";
			
	} 
 





}


}


$num1 = new num_string();
$num1 -> criador($_GET['s'], $_GET['c']);



$num1->toString();


?>