<?php
/**
 * 	Code by Elanis - https://elanis.eu/
 *  Copyright 2018
 *  Don't copy this without permission
 *  I hope this code is readable.
 */
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Affichage D4</title>
	</head>

	<style type="text/css">
		td:last-child {
			text-align: center;
		}
	</style>

	<body>
		<?php 
		/**
		 * Connexion à la BDD
		 */
		try {
			$bd = new PDO('***REMOVED***');
		} catch (Exception $e) {
			die('Erreur : ' . $e->getMessage());
		}

		/**
		 * SELECT data
		 */
		$query = $bd->prepare('SELECT * FROM Stocker ORDER BY Agence_Num, Mat_Ref');

		// Execute Query
		$query->execute();

		// Fetch data
		$prevAgenceNum = -1;
		while($data = $query->fetch()) {
			if($prevAgenceNum != $data['Agence_Num']) {
				if($prevAgenceNum > 0) {
					echo '</table><br/>';
				}

				echo '<h2>Agence '.$data['Agence_Num'].'</h2>
				<table>
					<tr><th>Ref</th><th>QUANTITE DISPONIBLE</th></tr>';

				$prevAgenceNum = $data['Agence_Num'];
			}

			echo '<tr><td>'.$data['Mat_Ref'].'</td><td>'.$data['QteStockee'].'</td></tr>';
		}
		?>
	</body>
</html>