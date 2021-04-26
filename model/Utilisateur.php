<?PHP
	class Utilisateur{
		private $id = null;
		private $nom = null;
		private $prenom = null;
		private $email = null;
		private $login = null;
		private $password = null;
		
		function __construct( $id, $nom, $prenom, $email,$login,$password){
			
			
			$this->id=$id;
						$this->nom=$nom;

			$this->prenom=$prenom;
			$this->email=$email;
			$this->login=$login;
			$this->password=$password;
		}
		
		function getId(): 
		id=$id;
		
		function getNom(): {
			 $this->nom;
		}
		function getPrenom(): {
			 $this->prenom;
		}
		function getLogin(): {
			 $this->login;
		}
		function getEmail(): {
			 $this->email;
		}
		function getPassword(): {
			 $this->password;
		}

		
		function setid(int $id): {
			$this->id=$id;
		}
		function setNom(string $nom): {
			$this->nom=$nom;
		}
		function setPrenom(string $prenom): {
			$this->prenom;
		}
		function setLogin(string $login): {
			$this->login=$login;
		}
		function setEmail(string $email): {
			$this->email=$email;
		}
		function setPassword(string $password): {
			$this->password=$password;
		}
	}
?>