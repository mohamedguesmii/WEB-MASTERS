<?PHP
	class promoplante{
        private $id_promoplante = null;
		private $id = null;
		private $nom = null;
		private $longeur = null;
		private $prix = null;
		private $type = null;
		private $image = null;
        private $prix_promoplante = null;
	
		
		
	 function __construct( int $id,string $nom,  int $longeur, int $prix, string $type, string $image , string $prix_promoplante){
			
			$this->id=$id;
            $this->nom=$nom;
			$this->longeur=$longeur;
			$this->prix=$prix;
			$this->type=$type;
			$this->image=$image;
            $this->prix_promoplante=$prix_promoplante ;
		
		}
		
        function getid_promoplante(): int{
			return $this->id_promoplante;
		}
    
        function getId(): int{
			return $this->id;
		}	
	 function getnom(): string{
			return $this->nom;
		}
		 function getlongeur(): int{
			return $this->longeur;
		}	
		 function gettype(): string{
			return $this->type;
		}
		 function getprix(): int{
			return $this->prix;
		}
		 function getimage(): string{
			return $this->image;
		}
        function getprix_promoplante(): string{
			return $this->prix_promoplante;
		}
	

        function setid(string $id): void{
			$this->id=$id;
		}
		 function setnom(string $nom): void{
			$this->nom=$nom;
		}
		 function setlongeur( int $longeur): void{
			$this->longeur=$longeur;
		}
		 function settype(string $type): void{
			$this->type=$type;
		}
		 function setprix(int $prix): void{
			$this->prix=$prix;
		}
		 function setimage(string $image): void{
			$this->image=$image;
		}
        function setprix_promoplante(string $prix_promoplante): void{
			$this->prix_promoplante=$prix_promoplante;
		}
	
			
		}
	
?>