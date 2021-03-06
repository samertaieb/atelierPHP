<?php
include "config.php";
class club{
    private  $id=null;
    private  $nom=null;
    private  $description=null;
    private  $adresse=null;
    private  $domaine=null;
    public function __construct(int $id, string $description , string $nom , string $adresse , string $domaine){
        $this->id=$id;
        $this->description=$description;
        $this->nom=$nom;
        $this->adresse=$adresse;
        $this->domaine=$domaine;
    }
    public function getid(): int{
        return $this->id;
    }
    public function setid($id):void{
         $this->id=$id;
    }
    public function getdescription():string{
        return $this->description;
    }
    public function setdescription($description):void{
         $this->description=$description;
    }
    public function getnom():string{
        return $this->nom; 
    }
    public function setnom($nom):void{
         $this->nom=$nom;
    }
    public function getadresse():string{
        return $this->adresse;
    }
    public function setadresse($adresse):void{
         $this->adresse=$adresse;
    }
    public function getdomaine():string{
        return $this->domaine;
    }
    public function setdomaine($domaine):void{
         $this->domaine=$domaine;
    }
    public function afficherClub():void{
        echo"<b> id :</b>".$this->id. "<br>";
        echo"<b> nom :</b>".$this->nom. "<br>";
        echo"<b> description :</b>".$this->description. "<br>";
        echo"<b> adresse :</b>".$this->adresse. "<br>";
        echo"<b> domaine :</b>".$this->domaine. "<br>";
        
    }
    public function  affiche(){
        $sql="Select * FROM club";
        try{
        $db = config::getConnexion();
        $liste = $db->Query($sql);
        return $liste;
    }
catch(exception $e){
    die ($e -> getMesssage(""));
}}
    public function Insertion(club$c){
        $sql="INSERT Into club (id,nom,description,adresse,domaine)
        VALUES(:id ,:nom,:description,:adresse,:domaine)";
        $db=Config :: getconnexion();
        $req = $db ->prepare($sql);
        $i = $c->getid();
        $n = $c->getnom();
        $d=$c->getdescription();
        $ad = $c->getadresse();
        $do= $c->getdomaine();
        $req -> bindValue(':id',$i);
        $req -> bindValue(':nom',$n);
        $req -> bindValue(':description',$d);
        $req -> bindValue(':adresse',$ad);
        $req -> bindValue(':domaine',$do);
        $req-> execute();
    }
}
?>
