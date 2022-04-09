<?php 
	
	include_once("fonction.php");

?> 

<html>
     <head>
		 <title>Test de recherche</title>
	 </head>
	 <body style="margin-top: 200px;margin-left:200px;text-align:justify">
	   
		<h3>
			Le film le plus populaire dans le réseau d'amis de l'utilisateur 
			<?php echo  $user2->getNom(); ?>
			est : <?php echo meilleurFilm($user2);?>
			</h3>
	 
		
	 </body>
</html>
 
