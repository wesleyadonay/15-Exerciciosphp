<?php
class string_caractere_busca{
	
	public $s;
	public $c;
	private $i;
	private $total;
	private $rest;
	private $y = 0;
	
	

	

function criador($s, $c) {
	$this->s = $s;
	$this->c = $c;

	
	
	

}


function toString(){
	

	$this->total = $this->s;
	echo "O total de caractere é: ", strlen($this->total), "<br>";

	for($this->i = 1; $this->i <= strlen($this->total); $this->i++){

			$this->rest = substr($this->s, $this->i, 1);

			if ($this->rest === $this->c) {

				$this->y +=1;
				
			}


		
			
	} 

	echo $this->y;
 





}


}


$num1 = new string_caractere_busca();
$num1 -> criador($_GET['s'], $_GET['c']);



$num1->toString();


?>