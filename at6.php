<?php
class nota{
	
	public $nota1;
	public $nota2;
	public $nota3;
	public $nota4;
	private $media;

	

function criador($nota1, $nota2, $nota3, $nota4) {
	$this->nota1 = $nota1;
	$this->nota2 = $nota2;
	$this->nota3 = $nota3;
	$this->nota4 = $nota4;
	
	

}


function toString(){
	
	$this->media = $this->nota1 + $this->nota2 + $this->nota3 + $this->nota4 / 4; 

	if($this->media  >= 7){

		echo "Aluno Aprovado!!!";

	}
	else {
		
		echo "Aluno Reprovado!";
	}


}



}





$num1 = new nota();
$num1 -> criador( $_GET['nota1'],$_GET['nota2'], $_GET['nota3'], $_GET['nota4']);



$num1->toString();


?>