<?php
	require 'prepop.php';
	// require 'beanhook.php';
	require 'madlib.php';
	// require 'logProcessorLOL.php';

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
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>List of Lasts</title>
	<link href="https://fonts.googleapis.com/css?family=Sniglet" type="text/css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Merriweather">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<style>
  		body { background: #000; color: #fff; font-family: 'Merriweather', "Arial", sans-serif; }
  		div { margin: 30px auto; width: 50%;

   		padding: 1em 2em; border: 4px dashed #000; bo; font-size: 2em;  background: #fff; color: #000; border-radius: 50px; }
  		.mySpecialDiv { background: #bada55; color:red; }
  		#mySpecialDiv { background: #000; }
  		p { font-size: .8em; }
  		/*div p { font-size: 4em; }*/
  		h3 {}
	</style>
</head>
<body>
	<div style="text-align:center">
	<h1>Your List of Lasts</h1>
	<h3>YOUR FAKE DEATH IS OUR ART</h3>
		<form action="aftermath.php" name="survey" method="POST">
		<h4>What is your first name?</h4>
		<input type="text" action="survey.php" name="name" placeholder="Analysse? Edgar? Ned?">

		<h4>What are your pronouns?</h4>

		<input type="radio" name="gender" value="they">
		<label for="they">They/Them/Theirs</label>
		<br>
		<input type="radio" name="gender"
		value="she">
		<label for="she">She/Her/Hers</label>
		<br>
		<input type="radio" name="gender" value="he">
		<label for="he">He/Him/His</label>
		<br>

		<h4>How old are you?</h4>
		<input type="text" action="survey.php" name="age" placeholder="Don't be shy.">

		<h4>What's your occupation?</h4>
		<input type="text" action="survey.php" name="occupation" placeholder="e.g. Student, Artist">

		<h4>Favorite color?</h4>
		<input type="radio" name="faveColor" value="Blue">
		<label for="Blue">Blue</label>
		<br>
		<input type="radio" name="faveColor"
		value="Red">
		<label for="Red">Red</label>
		<br>
		<input type="radio" name="faveColor" value="Yellow">
		<label for="Yellow">Yellow</label>
		<br>
		<input type="radio" name="faveColor" value="Green">
		<label for="Green">Green</label>
		<br>
		<input type="radio" name="faveColor" value="Purple">
		<label for="Purple">Purple</label>
		<br>
		<input type="radio" name="faveColor" value="Orange">
		<label for="Orange">Orange</label>
		<br>
		<input type="radio" name="faveColor" value="Black">
		<label for="Black">Black</label>
		<br>
		<input type="radio" name="faveColor" value="White">
		<label for="White">White</label>
		<br>
		<input type="radio" name="faveColor" value="Other">
		<label for="Other">Other</label>
		<br>

		<h4>What's your favorite kind of music?</h4>
		<input type="text" action="survey.php" name="faveMusic" placeholder="Except Rap and Country (just kidding).">

		<h4>Where's your favorite place to go?</h4>
		<input type="text" action="survey.php" name="favePlace" placeholder="e.g. Say Sí">

		<h4>Your favorite season?</h4>
		<input type="radio" name="season" value="Spring">
		<label for="Spring">Spring</label>
		<br>
		<input type="radio" name="season"
		value="Summer">
		<label for="Summer">Summer</label>
		<br>
		<input type="radio" name="season" value="Autumn">
		<label for="Autumn">Autumn</label>
		<br>
		<input type="radio" name="season" value="Winter">
		<label for="Winter">Winter</label>
		<br>

		<h6>For the next part: You'll be choosing between several options that are presented to you. Select the one that describes you the best.</h6>

		<h4>I am.....</h4>
		<br>
	    <input type="radio" name="emoSHCAS" id="emoSHA" value="sharp"><label for="emoSHA">Sharp<br>
	    	or<br>
	    <input type="radio" name="emoSHCAS" id="emoCAS" value="casual"><label for="emoCAS">Casual<br>
			<br>
	    <input type="radio" name="emoCLUGRA" id="emoCLU" value="clumsy"><label for="emoCLU">Clumsy<br>
	    	or<br>
	    <input type="radio" name="emoCLUGRA" id="emoGRA" value="graceful"><label for="emoGRA">Graceful<br>
			<br>
	    <input type="radio" name="emoSHYCON" id="emoSHY" value="shy"><label for="emoSHY">Shy<br>
	    	or<br>
	    <input type="radio" name="emoSHYCON" id="emoCON" value="confident"><label for="emoCON">Confident<br>
			<br>
	    <input type="radio" name="emoMELINT" id="emoMEL" value="mellow"><label for="emoMEL">Mellow<br>
	    	or<br>
	    <input type="radio" name="emoMELINT" id="emoINT" value="intense"><label for="emoINT">Intense<br>
			<br>
	    <input type="radio" name="emoORGMES" id="emoORG" value="organized"><label for="emoORG">Organized<br>
	    	or<br>
	    <input type="radio" name="emoORGMES" id="emoMES" value="messy"><label for="emoMES">Messy<br>
			<br>
	    <input type="radio" name="emoAGRDOC" id="emoAGR" value="aggressive"><label for="emoAGR">Aggressive<br>
	    	or<br>
	    <input type="radio" name="emoAGRDOC" id="emoAGR" value="docile"><label for="emoDOC">Docile<br>
			<br>
	    <input type="radio" name="emoADVCAU" id="emoADV" value="adventurous"><label for="emoADV">Adventurous<br>
	    	or<br>
	    <input type="radio" name="emoADVCAU" id="emoCAU" value="cautious"><label for="emoCAU">Cautious<br>
			<br>
	    <input type="radio" name="emoSTRWEA" id="emoSTR" value="strong"><label for="emoSTR">Strong<br>
	    	or<br>
	    <input type="radio" name="emoSTRWEA" id="emoWEA" value="weak"><label for="emoWEA">Weak<br>

	    <h4>What was the last thing you ate?</h4>
		<input type="text" action="survey.php" name="lastAte" placeholder="e.g. Barbacoa & Big Red">

		<h4>Where were you before here?</h4>
		<input type="text" action="survey.php" name="beforeHere" placeholder="School? Home? Work?">

		<h6>Try to put some thought into these next questions:</h6>

		<h4>What is your proudest accomplisment?</h4>
		<input type="text" action="survey.php" name="proudest" placeholder="It could be anything!">

		<h4>What was dark time in your life?</h4>
		<input type="text" action="survey.php" name="dark" placeholder="When was a time you felt low/unsure of yourself?">

		<h4>If your friends and family were to do an activity to remember you by— what would you want that activity to be?</h4>
		<input type="text" action="survey.php" name="celebrated" placeholder="Dinner? Drinking? Singing?">

		<h4>Who was the last person that told you they loved you?</h4>
		<input type="text" action="survey.php" name="loveme" placeholder="Parent? Loved one? Sibling?">

		<h4>Who was the last person that you told you loved?</h4>
		<input type="text" action="survey.php" name="loveyou" placeholder="Parent? Loved one? Sibling?">

		<h4>Are you content?</h4>
		<input type="radio" name="content" value="yes"><label for="yes">Yes<br>
	    <input type="radio" name="content" value="no"><label for="no">No<br>

		<input type="submit">
	</form>
	</div>

</body>
</html>