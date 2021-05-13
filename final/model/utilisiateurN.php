<?PHP
	class Utilisateur{
		private ?int $id = null;
		private ?string $nom = null;
		private ?string $prix = null;
		private ?int $dateexp = null;
		

		
		function __construct(string $nom, int $prix, int $dateexp){
			
			$this->nom=$nom;
			$this->prix=$prix;
			$this->dateexp=$dateexp;
		
			
		}
		
		function getId(): int{
			return $this->id;
		}
		function getNom(): string{
			return $this->nom;
		}
		function getPrix(): int{
			return $this->prix;
		}
		function getDateexp(): int{
			return $this->dateexp;
		}
		
		

		function setNom(string $nom): void{
			$this->nom=$nom;
		}
		function setPrix(string $prix): void{
			$this->prix=$prix;
		}
		function setDateexp(int $dateexp): void{
			$this->dateexp=$dateexp;
		}
		
		
	}
?>