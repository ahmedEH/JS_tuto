<?php
// connexion à la base de données
$db_username = 'root';
$db_password = '';
$db_name     = 'testform';
$db_host     = 'localhost';

$db = mysqli_connect($db_host, $db_username, $db_password,$db_name) or die('could not connect to database');


if(isset($_GET['submit'])) 
{

	foreach (array_combine($_GET['nom'], $_GET['prenom']) as $nom => $prenom)
	{

		$sql = "INSERT INTO personnes (nom,prenom) 
				VALUES('$nom','$prenom')";
		mysqli_query($db,$sql);

	}



}

header("location:forms.php?l=1");


?>