
<?php

// connexion
$m = new MongoClient();

// sélection d'une base de données
$db = $m->timeshare;

// sélectionne une collection (analogue à une table de base de données relationnelle)
$collection = $db->annonce;



/*
// ajoute un enregistrement d'un nouveau document
$document = array( "titre" => "titretest1", "lieu" => "lieutest1" );
$collection->insert($document);
/* // ajoute un autre enregistrement d'1 nouveau document, avec une façon différente d'insertion
$document = array( "title" => "XKCD", "online" => true );
$collection->insert($document);  */


// récupère toute de la collection et l'affiche en print_r
$cursor = $collection->find();
//$array = iterator_to_array($cursor);
//print_r($array);
echo json_encode(iterator_to_array($cursor));

// // traverse les résultats et echo de test si fonctionne
// foreach ($cursor as $document) 
// 	{
// 	    echo $document["titre"] . "\n";
// 	    echo $document["lieu"] . "\n";
// 	}

?>


<style type="text/css">
	.gche{
		background-color: grey;
	}
	.drt{
		background-color: lightgrey;
	}

</style>
<table>
	<tr>
		<td class=gche>
			<strong>titre</strong> </br>
			<?php
				// traverse les résultats
				foreach ($cursor as $document) 
				{
				    echo $document["titre"] . "</br>";
				}
				?>
		</td>
		
		<td class=drt>
			 <strong>lieu</strong></br>

					<?php
				// traverse les résultats
				foreach ($cursor as $document) 
				{
					echo $document["lieu"] . "</br>";			
				}
				?>
		</td>
	</tr>
</table>