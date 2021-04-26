<?php
class Commandes{
    private ?int $idCommande=null;
    private ?string $paiment=null;
    private ?string $client=null;
    private ?int $Montant=null;
    private ?string $produit=null;
    private ?string $DemAnnulation=null;

   
//Getters


    public function getidComande():int{
        return $this->idCommande;
    }
    public function getpaiment():string{
        return $this->paiment;
    }
    public function getclient():string{
        return $this->client;
    }
    public function getmontant():int{
        return $this->Montant;
    }
    public function getproduit():string{
        return $this->produit;
    }
    public function getDemAnnulation():string{
        return $this->DemAnnulation;
    }
    

    public function  __construct ($client,$paiment,$Montant,$produit){
    
      
        $this->client=$client;
        $this->paiment=$paiment;
        $this->Montant=$Montant;
        $this->produit=$produit;
        $this->DemAnnulation="NON";

       }

}
?>