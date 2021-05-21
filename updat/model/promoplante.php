<?PHP
	class promoplante{
        private $id_promoplante = null;
		private $id = null;
		private $nom = null;
		private $longeur = null;
		private $prix = null;
		private $type = null;
		private $image = null;
		private $dated = null;
		private $datef = null;
        private $prix_promoplante = null;
	
		
		
	 function __construct(  $id, $nom,  $longeur,$prix, $type,$image,$dated , $datef , $prix_promoplante){
			
			$this->id=$id;
            $this->nom=$nom;
			$this->longeur=$longeur;
			$this->prix=$prix;
			$this->type=$type;
			$this->image=$image;
			$this->dated=$dated;
			$this->datef=$datef;
            $this->prix_promoplante=$prix_promoplante ;
		
		}
		
        function getid_promoplante(){
			return $this->id_promoplante;
		}
    
        function getId(){
			return $this->id;
		}	
	 function getnom(){
			return $this->nom;
		}
		 function getlongeur(){
			return $this->longeur;
		}	
		 function gettype(){
			return $this->type;
		}
		 function getprix(){
			return $this->prix;
		}
		 function getimage(){
			return $this->image;
		}
		function getdated(){
			return $this->dated;
		}
		function getdatef(){
			return $this->datef;
		}
        function getprix_promoplante(): string{
			return $this->prix_promoplante;
		}
	

        function setid( $id){
			$this->id=$id;
		}
		 function setnom( $nom){
			$this->nom=$nom;
		}
		 function setlongeur( $longeur){
			$this->longeur=$longeur;
		}
		 function settype($type){
			$this->type=$type;
		}
		 function setprix($prix){
			$this->prix=$prix;
		}
		 function setimage($image){
			$this->image=$image;
		}

		function setdated($dated){
			$this->dated=$dated;
		}

		function setdatef( $datef){
			$this->datef=$datef;
		}
        function setprix_promoplante( $prix_promoplante){
			$this->prix_promoplante=$prix_promoplante;
		}
	
			
		}
	
?>