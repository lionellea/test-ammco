<?php 

include_once("User.php");

class Ami 
{
    private $utilisateur;
    private $ami;

    public function __construct(){}

    public function getUtilisateur() : User
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(User $utilisateur)
    {
        $this->utilisateur = $utilisateur;
    }

   public function getAmi() : User
   {
       return $this->ami;
   }

   public function setAmi(User $ami)
   {
        $this->ami = $ami;
   }
}

