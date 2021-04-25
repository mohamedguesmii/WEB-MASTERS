<?php
class promoanimaux 
{

   private $id_promoanimaux ;
	private $id_animaux;
	private $sex;
	private $typee;
	private $age;
	private $prix;
	private $categorie;
	private $couleur;
	private $image;
	private $prix_promotions;
	 

	function __construct($id_animaux,$sex,$typee,$age,$prix,$categorie,$couleur,$image,$prix_promotions)
				{
		$this->id_animaux=$id_animaux ;
		$this->sex=$sex;
		$this->typee=$typee;
		$this->age=$age;
		$this->prix=$prix;
		$this->categorie=$categorie;
		$this->couleur=$couleur;
		$this->image=$image;
		$this->prix_promotions=$prix_promotions;

		
				}


	function getid_promoanimaux()
	{
		return $this->id_promoanimaux;
	}
	function getid_animaux(){
		return $this->id_animaux;
	}
	function getsex(){
		return $this->sex;
	}
	function gettypee(){
		return $this->typee;
	}
	function getage(){
		return $this->age;
	}
	function getprix(){
		return $this->prix;
	}
	function getcategorie(){
		return $this->categorie;
	}
	function getcouleur(){
		return $this->couleur;
	}
	function getprix_promotions(){
		return $this->prix_promotions;
	}
	function getimage(){
		return $this->image;
	}
	


	function setid_animaux($id_animaux)
	{
		$this->id_animaux=$id_animaux;
	}
function setsex($sex)
{
	$this->sex=$sex;
}
	function settypee($typee){
		$this->typee=$typee;
	}
	function setage($age){
		$this->age=$age;
	}
	function setprix($prix){
		$this->prix=$prix;
	}
	function setcategorie($categorie){
		$this->categorie=$categorie;
	}
	function setcouleur($couleur){
		$this->couleur=$couleur;
	}
	function setprix_promotions($prix_promotions){
		$this->prix_promotions=$prix_promotions;
	}
	function setimage($image){
		$this->image=$image;
	}
	

}

?>
