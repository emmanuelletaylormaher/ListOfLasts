<?php
	require 'prepop.php';
	require 'beanhook.php';
	require 'madlib.php';

	$sentences = array();
	
	array_push($sentences, shyConfident(rand(1, 2), "stevan", "he"));
	array_push($sentences, clumsyGraceful(rand(1, 2), "stevan", "he"));
	array_push($sentences, mellowIntense(rand(1, 2), "stevan", "he"));
	array_push($sentences, organizedMessy(rand(1, 2), "stevan", "he"));
	array_push($sentences, adventurousCautious(rand(1, 2), "stevan", "he"));
	array_push($sentences, aggressiveDocile(rand(1, 2), "stevan", "he"));
	array_push($sentences, strongWeak(rand(1, 2), "stevan", "he"));
	shuffle($sentences);

?>

<!DOCTYPE html>
<html>
<head>
	<title>LIST OF LASTS</title>
</head>
<body>
	
	<h2>
		<?php
		everything("stevan", "he", "answer one", "answer two", "answer three");
		?>
	</h2>



</body>
</html>