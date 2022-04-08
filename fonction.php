<?php 
	
	include_once("User.php");
	include_once("Film.php");
    include_once("User_film.php");
    include_once("Ami.php");

    function ajoutCompteurFilm(User $user, &$filmScore) {
		foreach($user->getUserFilms() as $userfilm) {
			$present = false;
			foreach($filmScore as $film => $score) {
				if($film == $userfilm->getFilms()->getTitre()) {
					$present = true; 
				}
			}
			if($present) {
				$filmScore[$userfilm->getFilms()->getTitre()]++;
			}
			else {
				$filmScore[$userfilm->getFilms()->getTitre()] = 1;
			}
		}
	}
	
    function classerFilms(User $user, &$filmScore){
		ajoutCompteurFilm($user, $filmScore);
		foreach($user->getAmis() as $ami) {
			if($ami->getAmi()->getNom() != $user->getNom()) {
				classerFilms($ami->getAmi(), $filmScore);
			}
		}
	}
	
	function meilleurFilm(User $user) {
		$filmScore = [];
		classerFilms($user, $filmScore);
		arsort($filmScore);
		$meilleurFilm = null;
		foreach($filmScore as $film => $score) {
			$meilleurFilm = $film;
			break;
		}
		return $meilleurFilm;
	}
	
	$user1 = new User();
	$user1->setNom("Eloundou");
	$user1->setPrenom("Victor");
 
	
	$user2 = new User();
	$user2->setNom("Adjimi");
	$user2->setPrenom("Lionie");

    $user3 = new User();
	$user3->setNom("Assouma");
	$user3->setPrenom("Alice");

    $user4 = new User();
	$user4->setNom("Mewoulou");
	$user4->setPrenom("Steeven");

	$film1 = new Film();
	$film1->setTitre("Le négociateur");
	
	$film2 = new Film();
	$film2->setTitre("Titanic");

    $film3 = new Film();
	$film3->setTitre("La Donia");
	
	$film4 = new Film();
	$film4->setTitre("Devious maids");

    $user_film1 = new User_film();
    $user_film1->setUsers($user1);
    $user_film1->setFilms($film2);

    $user_film2 = new User_film();
    $user_film2->setUsers($user1);
    $user_film2->setFilms($film1);

    $user_film3 = new User_film();
    $user_film3->setUsers($user2);
    $user_film3->setFilms($film1);

    $user_film4 = new User_film();
    $user_film4->setUsers($user2);
    $user_film4->setFilms($film3);

    $user_film5 = new User_film();
    $user_film5->setUsers($user3);
    $user_film5->setFilms($film2);

    $user_film6 = new User_film();
    $user_film6->setUsers($user3);
    $user_film6->setFilms($film4);

   $ami1 = new Ami();
   $ami1->setUtilisateur($user1);
   $ami1->setAmi($user2);

   $ami2 = new Ami();
   $ami2->setUtilisateur($user1);
   $ami2->setAmi($user3);

   $ami3 = new Ami();
   $ami3->setUtilisateur($user2);
   $ami3->setAmi($user4);
   
   $ami4 = new Ami();
   $ami4->setUtilisateur($user4);
   $ami4->setAmi($user3);
   
	
   
	$user1->addUserFilms($user_film1);
	$user1->addUserFilms($user_film2);
	$user2->addUserFilms($user_film3);
	$user2->addUserFilms($user_film4);
	$user3->addUserFilms($user_film5);
	$user3->addUserFilms($user_film6);
	
	$user1->addAmis($ami1);
    $user1->addAmis($ami2);
    $user2->addAmis($ami3);
    $user4->addAmis($ami4);
	
	/*$i = 1;
    
    foreach($user1->getUserFilms() as $donnee){
		echo $user1->getNom()."  aime le Film numéro  ".$i." : ".$donnee->getFilms()->getTitre()."<br />";
        $i++;
	}

    foreach($user1->getAmis() as $row){
		echo $user1->getNom()." est ami avec  : ".$row->getAmi()->getNom()."<br />";
        
	}
    
   // echo meilleurFilm($user2);*/

	
?> 

 