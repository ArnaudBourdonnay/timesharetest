
<?php

/*echo "blabla avant connection";


// connect to mongodb
$m = new MongoClient();

echo "Connection to database successfully";
// select a database
$db = $m->..........;

echo "Database mydb selected";
*/





// connexion
$m = new MongoClient();

// sélection d'une base de données
$db = $m->comedy;

// sélectionne une collection (analogue à une table de base de données relationnelle)
$collection = $db->cartoons;

/*
// ajoute un enregistrement
$document = array( "title" => "Puss n Boots", "author" => "Anderson" );
$collection->insert($document);

// ajoute un autre enregistrement, avec une façon différente d'insertion
$document = array( "title" => "XKCD", "online" => true );
$collection->insert($document);
*/

// récupère tout de la collection
$cursor = $collection->find();
$array = iterator_to_array($cursor);
print_r($array);
/*
// traverse les résultats
foreach ($cursor as $document) 
	{
	    echo $document["title"] . "\n";
	    echo $document["author"] . "\n";
	}
*/
?>

<!-- <ul id="menu-deroulant">
	<li><a href="#">Lien menu 1</a>
		<ul>
		while 
			<li><a href="#">lien sous menu 1</a></li>
		</ul>
	</li> -->

<style type="text/css">
	.gche{
		background-color: grey;
	}
	.drt{
		background-color: lightgrey;
	}

</style>

	<div class=gche>
		<strong>Quoi</strong> </br>
		<?php
			// traverse les résultats
			foreach ($cursor as $document) 
			{
			    echo $document["title"] . "</br>";
			}
			?>
	</div>
	<div class=drt>
		 <strong>De qui</strong></br>

				<?php
			// traverse les résultats
			foreach ($cursor as $document) 
			{
				echo $document["author"] . "</br>";			
			}
			?>
	</div>	
