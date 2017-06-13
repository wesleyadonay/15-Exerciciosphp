<?php
class string_igual_diferente{
	
	public $c;
	public $c1;
	
	
	

	

function criador($c, $c1) {
	$this->c = $c;
	$this->c1 = $c1;


	
	
	

}


function toString(){
	

	if($this->c === $this->c1){

		echo "Strings Iguais!";

	}
	else{
		echo "String Diferente!";
	}
			
	} 
 





}





$num1 = new string_igual_diferente();
$num1 -> criador($_GET['caractere'], $_GET['caract'] );



$num1->toString();


?>