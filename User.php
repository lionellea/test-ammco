<?php

include_once("Ami.php");
include_once("User_film.php");
include_once("Ami.php");

class User
{
    private $nom;
    private $prenom;
    private $userFilms = [];
    private $amis = [];

    public function __construct() {}

    
    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

   public function addUserFilms(User_film $userFilms) {
		$this->userFilms[] = $userFilms;
    }

    public function getUserFilms() {
        return $this->userFilms;
    }


    public function addAmis(Ami $ami)
    {
        $this->amis[] = $ami; 
    }

    public function getAmis()
    {
        return $this->amis;
    }

   

}

?>