<?php

		echo "Erreur 404<br />";
		
		if (isset($_GET['config'])) {
			echo "il manque le fichier config.php <br>";
		}	
		if (isset($_GET['fonction'])) {
			echo "il manque le fichier fonction.php <br>";
		}	

?>