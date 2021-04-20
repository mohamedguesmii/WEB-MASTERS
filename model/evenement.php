<?php
class evenement 
{


	private $description;
	private $lieu;
	private $date;
	 

	function __construct($description,$lieu,$date)
				{
		$this->description=$description;
		$this->lieu=$lieu;
		$this->date=$date;
		
				}
	function getid()
	{
		return $this->id;
	}
	function getdescription(){
		return $this->description;
	}
	function getlieu(){
		return $this->lieu;
	}
	function getdate(){
		return $this->date;
	}
	


function setdescription($description)
{
	$this->description=$description;
}
	function setlieu($lieu){
		$this->lieu=$lieu;
	}
	function setdate($date){
		$this->date=$date;
	}
	

}

?>
