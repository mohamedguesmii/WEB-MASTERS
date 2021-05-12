<?php
class participe 
{
    private $id_participe ;
   private $id ;
	private $nbre_participant;
	
	 

	function __construct($id,$nbre_participant)
				{
		$this->id=$id;
		$this->nbre_participant=$nbre_participant;
			}

   function getid_participe()
	{
		return $this->id_participe;
	}

    function getid_evenement()
	{
		return $this->id;
	}
	function getnbre_participant(){
		return $this->nbre_participant;
	}
	

	function setid_evenement($id)
	{
		$this->id_evenement=$id;
	}
    function setnbre_participant($nbre_participant)
    {
	    $this->nbre_participant=$nbre_participant;
    }
	
	

}

?>
