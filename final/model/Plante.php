<?PHP
	class Plante{
		private $id = null;
		private $nom = null;
		private $longeur = null;
		private $prix = null;
		private $type = null;
		private $image = null;
	
		
		
	 function __construct( string $nom,  int $longeur, int $prix, string $type, string $image ){
			
			$this->nom=$nom;
			$this->longeur=$longeur;
			$this->prix=$prix;
			$this->type=$type;
			$this->image=$image;
		
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
	
			
		}
	
?>