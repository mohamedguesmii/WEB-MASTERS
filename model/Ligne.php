<?php
class Ligne{
    private ?int $idLigne=null;
    private ?string $produit=null;
    private ?int $idCommande=null;
   
   
//Getters


    public function getidLigne():int{
    return $this->idLingne;
    }

    public function getidCommandee():int{
        return $this->idCommande;
    }

    public function getproduit():string{
        return $this->produit;
    }
   



    public function  __construct ($produit,$idCommande){
    
      
        $this->produit=$produit;
        $this->idCommande=$idCommande;
     

       }

}
?>