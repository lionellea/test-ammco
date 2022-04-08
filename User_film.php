<?php

    include_once("User.php");
	include_once("Film.php");

class User_film
{
  
    private $users;
    private $films;


    public function __construct(){}

   
    public function getUsers() : User
    {
        return $this->users;
    }

    public function setUsers(User $users)
    {
        $this->users = $users;
    }

    public function getFilms() : Film
    {
        return $this->films;
    }

    public function setFilms(Film $films)
    {
        $this->films = $films;
    }
}

?>