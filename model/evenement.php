<?php
class evenement 
{

   private $type ;
	private $description;
	private $lieu;
	private $date;
	private $datef;
	private $categorie;

	 

	function __construct($type,$description,$lieu,$categorie,$date,$datef)
				{
					$this->type=$type ;
		$this->description=$description;
		$this->lieu=$lieu;
		$this->categorie=$categorie;
		$this->date=$date;
		$this->datef=$datef;


		
				}
	function getid()
	{
		return $this->id;
	}
	function gettype(){
		return $this->type;
	}
	function getdescription(){
		return $this->description;
	}
	function getlieu(){
		return $this->lieu;
	}
	function getcategorie(){
		return $this->categorie;
	}
	function getdate(){
		return $this->date;
	}
	function getdatef(){
		return $this->datef;
	}
	
	

	function settype($type)
	{
		$this->type=$type;
	}
function setdescription($description)
{
	$this->description=$description;
}
	function setlieu($lieu){
		$this->lieu=$lieu;
	}
	function setcategorie($categorie){
		$this->categorie=$categorie;
	}
	function setdate($date){
		$this->date=$date;
	}
	function setdatef($datef){
		$this->datef=$datef;
	}
	
	

}

?>
