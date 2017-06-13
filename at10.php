<?php
class num_fat{
	
	public $num;
	private $res;
	private $fat = 1;
	

	

function criador($num) {
	$this->num = $num;

	
	
	

}


function toString(){
	
	for($this->res = 1;$this->res <= $this->num; $this->res++){

			$this->fat *= $this->res;
			
	} 
echo  $this->num,"!: ",  $this->fat;
	
		
	


}



}





$num1 = new num_fat();
$num1 -> criador($_GET['num']);



$num1->toString();


?>