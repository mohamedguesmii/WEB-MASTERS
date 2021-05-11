<?PHP
	class Animaux{
		private ?int $id_animaux = null;
		private ?string $sex = null;
		private ?string $typee = null;
		private ?int $age = null;
		private ?int $prix = null;
		private ?string $categorie = null;
		private ?string $couleur = null;
		private ?string $image = null;

		
		function __construct(string $sex, string $typee, int $age, int $prix, string $categorie, string $couleur,string $image){
			
			$this->sex=$sex;
			$this->typee=$typee;
			$this->age=$age;
			$this->prix=$prix;
			$this->categorie=$categorie;
			$this->couleur=$couleur;
			$this->image=$image;
			
		}
		
		function getid_animaux(): int{
			return $this->id_animaux;
		}
		function getSex(): string{
			return $this->sex;
		}
		function getTypee(): string{
			return $this->typee;
		}
		function getAge(): int{
			return $this->age;
		}
		function getPrix(): int{
			return $this->prix;
		}
		function getCategorie(): string{
			return $this->categorie;
		}
		function getCouleur(): string{
			return $this->couleur;
		}
		function getimage(): string{
			return $this->image;
		}
		

		function setSex(string $sex): void{
			$this->sex=$sex;
		}
		function setTypee(string $typee): void{
			$this->typee=$typee;
		}
		function setAge(int $age): void{
			$this->age=$age;
		}
		function setPrix(int $prix): void{
			$this->prix=$prix;
		}
		function setCategorie(int $categorie): void{
			$this->categorie=$categorie;
		}
		function setCouleur(int $couleur): void{
			$this->couleur=$couleur;
		}
		function setimage(int $image): void{
			$this->image=$image;
		}
		
	}
	class Nourriture {
		private ?int $id = null;
		private ?string $nom = null;
		private ?string $prix = null;
		private ?string $categorie = null;
		private ?int $quantity = null;
		private ?string $image = null;
		

		
		function __construct(string $nom, int $prix, string $categorie, int $quantity, string $image){
			
			$this->nom=$nom;
			$this->prix=$prix;
			$this->categorie=$categorie;
			$this->quantity=$quantity;
			
			$this->image=$image;
		
			
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
		function getCategorie(): string{
			return $this->categorie;
		}
		function getQuantity(): int{
			return $this->quantity;
		}
		
		function getImage(): string{
			return $this->image;
		}
		
		

		function setNom(string $nom): void{
			$this->nom=$nom;
		}
		function setPrix(string $prix): void{
			$this->prix=$prix;
		}
		function setCategorie(string $categorie): void{
			$this->categorie=$categorie;
		}
		function setQuantity(int $quantity): void{
			$this->quantity=$quantity;
		}
		
		function setImage(int $image): void{
			$this->image=$image;
		}
		
		
	}
	

?>