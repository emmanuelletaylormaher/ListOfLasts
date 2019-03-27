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

	// everything("stevan", "he", "answer one", "answer two", "answer three");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>List of Lasts</title>
	<link href="https://fonts.googleapis.com/css?family=Sniglet" type="text/css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Merriweather">
	<style>
  		body { background: #000; color: #fff; font-family: 'Merriweather', "Arial", sans-serif; }
  		div { margin: 30px auto; width: 50%;

   		padding: 1em 2em; border: 4px dashed #000; bo; font-size: 2em;  background: #fff; color: #000; border-radius: 50px; }
  		.mySpecialDiv { background: #bada55; color:red; }
  		#mySpecialDiv { background: #000; }
  		p { font-size: .8em; }
  		/*div p { font-size: 4em; }*/
	</style>
</head>
<body>
	<div style="text-align:center">
	<h1>Your List of Lasts</h1>
	<h3>DISCLAIMER: All information you put here will be shared publicly.</h3>
	</div>

</body>
</html>