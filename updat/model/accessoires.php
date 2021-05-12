<?PHP
	class accessoires{
		private $id = null;
		private $categories = null;
		private $matiere = null;
		private $prix = null;
	
		private $image = null;
	
		
		
	 function __construct( string $categories,  string $matiere, int $prix,  string $image ){
			
			$this->categories=$categories;
			$this->matiere=$matiere;
			$this->prix=$prix;
			
			$this->image=$image;
		
		}
		
        function getId(): int{
			return $this->id;
		}
	 function getcategories(): string{
			return $this->categories;
		}
		 function getmatiere(): string{
			return $this->matiere;
		}	
		 function getprix(): int{
			return $this->prix;
		}
		 function getimage(): string{
			return $this->image;
		}
	

		 function setnom(string $categories): void{
			$this->categories=$categories;
		}
		 function setmatiere( int $matiere): void{
			$this->matiere=$matiere;
		}
		 function setprix(int $prix): void{
			$this->prix=$prix;
		}
		 function setimage(string $image): void{
			$this->image=$image;
		}
	
			
		}

		
	
?>