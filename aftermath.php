<?php
	require 'rb-mysql.php';
	require 'beanHook.php';

	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$age = $_POST['age'];
	$occupation = $_POST['occupation'];
	$faveColor = $_POST['faveColor'];
	$faveMusic = $_POST['faveMusic'];
	$favePlace = $_POST['favePlace'];
	$season = $_POST['season'];
	$lastAte = $_POST['lastAte'];
	$beforeHere = $_POST['beforeHere'];
	$proudest = $_POST['proudest'];
	$dark = $_POST['dark'];
	$celebrated = $_POST['celebrated'];
	$loveMe = $_POST['loveme'];
	$loveYou = $_POST['loveyou'];
	$content = $_POST['content'];

	$importWave = date("Y-m-d H:i:s");
	$testRun = false; // if true, nothing is written to beans

	if(!$testRun){
	  $surveyBean = R::dispense( 'survey' );
	  $surveyBean->name = $name;
	  $surveyBean->gender = $gender;
	  $surveyBean->age = $age;
	  $surveyBean->occupation = $occupation;
	  $surveyBean->faveColor = $faveColor;
	  $surveyBean->faveMusic = $faveMusic;
	  $surveyBean->favePlace = $favePlace;
	  $surveyBean->season = $season;
	  //binary description questions go here
	  $surveyBean->lastAte = $lastAte;
	  $surveyBean->beforeHere = $beforeHere;
	  $surveyBean->proudest = $proudest;
	  $surveyBean->darkTime = $dark;
	  $surveyBean->celebrated = $celebrated;
	  //surviving relatives
	  //value most
	  //last spoke with
	  $surveyBean->loveMe = $loveMe ;
	  $surveyBean->loveYou = $loveYou;
	  // see anybody one last time
	  $surveyBean->content = $content;
	  $beanId = R::store( $surveyBean );
	  echo '<p style="color:#bada55;">'.$beanId.'</p>';
	}

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