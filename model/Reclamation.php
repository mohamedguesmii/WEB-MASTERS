<?PHP
	class Reclamation{
		private $id_reclamation = null;
		private $date_reclamation = null;
		private $objet_reclamation = null;
		private $description = null;
		private $id = null;
		
		function __construct( $id_reclamation,$date_reclamation, $objet_reclamation, $description,$id){
			
			$this->$id_reclamation=$id_reclamation;	
			$this->date_reclamation=$date_reclamation;
			$this->objet_reclamation=$objet_reclamation;
			$this->description=$description;
			$this->id=$id;
		}
		
		function getId_reclamation()
		{
		return $this->id_reclamation ;
		}
		function getDate_reclamation()
		 {
			 return $this->date_reclamation;
		}
		function getObjet_reclamation()
		 {
			return $this->objet_reclamation;
		}
		function getDescription() 
		{
			 return $this->description;
		}
		function getId()
		{
		return $this->id ;
		}

		
		function setid_reclamation($id_reclamation) 
		{
			$this->id_reclamation=$id_reclamation;
		}
		
		function setDate_reclamation($date_reclamation)
		{
			$this->date_reclamation=$date_reclamation;
		}
		function setObjet_reclamation($objet_reclamation) 
		{
			$this->objet_reclamation=$objet_reclamation;
		}
		function setDescription($description) 
		{
			$this->description=$description;
		}
		function setid($id) 
		{
			$this->id=$id;
		}
	}
?>