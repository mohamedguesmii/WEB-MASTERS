<?php
class Livraisons{
    private ?int $id_livraison=null;
    private ?string $nom=null;
    private ?string $tel=null;
    private ?string $adresse=null;
    private ?string $email=null;
    private ?string $DemAnnulation=null;
    private ?int $idCommande=null;
//Getters
    public function  __construct ($nom,$tel,$adresse,$email,$idCommande){
        $this->nom=$nom;
        $this->tel=$tel;
        $this->adresse=$adresse;
        $this->email=$email;
        $this->idCommande=$idCommande;
        $this->DemAnnulation="NON";
    }

    public function getid():int{
        return $this->id;
    }
    public function getnom():string{
        return $this->nom;
    }
    public function gettel():string{
        return $this->tel;
    }  
    public function getadresse():string{
        return $this->adresse;
    }  
    public function getemail():string{
        return $this->email;
    }  
    public function getidcommande():int{
        return $this->idCommande;
    }
    public function getannulation():string{
        return $this->DemAnnulation;
    }
//Setters
    public function setid($id):void{
        $this->id=$id;
    }
    public function setnom($nom):void{
        $this->nom=$nom;
    }
    public function settel($tel):void{
        $this->tel=$tel;
    }
    public function setadresse($adresse):void{
        $this->adresse=$adresse;
    }
    public function setemaiil($email):void{
        $this->email=$email;
    }
    public function setannulation($annulation):void{
        $this->annulation=$annulation;
    }
    

}
    ?>