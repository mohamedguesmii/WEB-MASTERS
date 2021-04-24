<?PHP
	class Utilisateur{
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

?>