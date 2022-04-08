<?php

include_once 'User_film.php';
class Film
{
    private $titre;
    private $usersFilm = [];

    public function __construct(){}
    
   
    public function getTitre()
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;

    }


    public function addUsersFilm(User_film $usersFilm)
    {
            $this->usersFilm[] = $usersFilm;
    }

    public function getUsersFilm()
    {
        return $this->usersFilm;
    }
    
}

?>