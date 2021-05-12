<?php
class Commandes{
    private ?int $idCommande=null;
    private ?string $paiment=null;
    private ?string $idClient=null;
    private ?int $montant=null;

    private ?string $DemAnnulation=null;

   
//Getters


    public function getidCommande():int{
        return $this->idCommande;
    }
    public function getpaiment():string{
        return $this->paiment;
    }
    public function getclient():string{
        return $this->idClient;
    }
    public function getmontant():int{
        return $this->montant;
    }
   
    
    public function getDemAnnulation():string{
        return $this->DemAnnulation;
    }

   

    public function  __construct ($client,$paiment,$Montant){
        
        
        $this->idClient=$client;
        $this->paiment=$paiment;
        $this->montant=$Montant;
        $this->DemAnnulation="NON";

       }
       

}
?>