<?php
class Ligne{
    private ?int $idLigne=null;
    private ?string $produit=null;
    private ?int $idProduit=null;
    private ?int $idCommande=null;
   
   
//Getters


    public function getidLigne():int{
    return $this->idLingne;
    }

    public function getidProduit():int{
        return $this->idProduit;
        }
    
    public function getidCommandee():int{
        return $this->idCommande;
    }

    public function getproduit():string{
        return $this->produit;
    }
   



    public function  __construct ($produit,$idProduit,$idCommande){
    
      
        $this->produit=$produit;
        $this->idProduit=$idProduit;
        $this->idCommande=$idCommande;

     

       }

}
?>