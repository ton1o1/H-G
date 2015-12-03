<?php

//faire une fonction permettant de lister tous les appartements présents dans la BDD

function build_html_flats( $flats )
{
	$flats_html ='';
	foreach ($flats as $flat) 
	{
		$flats_html .= sprintf(
			'<div>
				<p>Appartement</p>
				<p>%1$s</p>
				<p>%2$s</p>
			</div>',
			$flat['host_id'],
			$flat['address']
		);
	}
	return $flats_html;
}

include('../inc/pdo.php');

$statement = $pdo->prepare( 'SELECT * FROM lodging ;');
$statement->execute();

$statementFlat = $statement->fetchAll();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home | GUEST</title>

</head>
	<body>

	<?= build_html_flats($statementFlat); ?>

	</body>
</html>





