<?php
	// require 'rb-mysql.php';
	// require 'beanHook.php';
	include_once 'db.php';

	if(!$conn)
		die('Could not connect.');

	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$age = $_POST['age'];
	$occupation = $_POST['occupation'];
	$faveColor = $_POST['faveColor'];
	$faveMusic = $_POST['faveMusic'];
	$favePlace = $_POST['favePlace'];
	$season = $_POST['season'];
	$sharpCasual = $_POST['sharpCasual'];
	$clumsyGraceful = $_POST['clumsyGraceful'];
	$shyConfident = $_POST['shyConfident'];
	$mellowIntense = $_POST['mellowIntense'];
	$organizedMessy = $_POST['organizedMessy'];
	$aggressiveDocile = $_POST['aggressiveDocile'];
	$adventurousCautious = $_POST['adventurousCautious'];
	$strongWeak = $_POST['strongWeak'];
	$lastAte = $_POST['lastAte'];
	$valued = $_POST['valued'];
	$beforeHere = $_POST['beforeHere'];
	$proudest = $_POST['proudest'];
	$dark = $_POST['dark'];
	$celebrated = $_POST['celebrated'];
	$lastSpoke = $_POST['lastspoke'];
	$loveMe = $_POST['loveme'];
	$loveYou = $_POST['loveyou'];
	$lastSeen = $_POST['lastseen'];
	$content = $_POST['content'];

	$sql = "INSERT INTO listoflasts" . "(name, gender, age, occupation, faveColor, faveMusic, favePlace, season, sharpCasual, clumsyGraceful, shyConfident, mellowIntense, organizedMessy, aggressiveDocile, adventurousCautious, strongWeak, lastAte, valued, beforeHere, proudest, dark, celebrated, lastSpoke, loveMe, loveYou, lastSeen, content) ". "VALUES($name, $gender, $age, $occupation, $faveColor, $faveMusic, $favePlace, $season, $sharpCasual, $clumsyGraceful, $shyConfident, $mellowIntense, $organizedMessy, $aggressiveDocile, $adventurousCautious, $strongWeak, $lastAte, $valued $beforeHere, $proudest, $dark, $celebrated, $lastSpoke, $loveMe, $loveYou, $lastSeen, $content)";

	$retval = mysql_query($sql, $conn);

	if(! $retval)
		die('Could not enter data.');

	mysql_close($conn);

	// $importWave = date("Y-m-d H:i:s");
	// $testRun = false; // if true, nothing is written to beans

	// if(!$testRun){
	// 	$surveyBean = R::dispense( 'survey' );
	//   	$surveyBean->name = $name;
	//   	$surveyBean->gender = $gender;
	//   	$surveyBean->age = $age;
	//   	$surveyBean->occupation = $occupation;
	//   	$surveyBean->faveColor = $faveColor;
	//   	$surveyBean->faveMusic = $faveMusic;
	//   	$surveyBean->favePlace = $favePlace;
	//   	$surveyBean->season = $season;
	//   	$surveyBean->sharpCasual = $sharpCasual;
	// 	$surveyBean->clumsyGraceful = $clumsyGraceful;
	// 	$surveyBean->shyConfident = $shyConfident;
	// 	$surveyBean->mellowIntense = $mellowIntense;
	// 	$surveyBean->organizedMessy = $organizedMessy;
	// 	$surveyBean->aggressiveDocile = $aggressiveDocile;
	// 	$surveyBean->adventurousCautious = $adventurousCautious;
	//  	$surveyBean->lastAte = $lastAte;
	//  	$surveyBean->valued = $valued;
	//  	$surveyBean->beforeHere = $beforeHere;
	//  	$surveyBean->proudest = $proudest;
	//  	$surveyBean->darkTime = $dark;
	//  	$surveyBean->celebrated = $celebrated;
	//   	//surviving relatives
	//  	$surveyBean->lastSpoke = $lastSpoke;
	//  	$surveyBean->loveMe = $loveMe;
	//  	$surveyBean->loveYou = $loveYou;
	//  	$surveyBean->lastSeen = $lastSeen;
	//  	$surveyBean->content = $content;
	//   	$beanId = R::store( $surveyBean );
	//   echo '<p style="color:#bada55;">'.$beanId.'</p>';
	// }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Aftermath</title>
</head>
<body>
	<?php

	print_r($_POST);


	?>
</body>
</html>