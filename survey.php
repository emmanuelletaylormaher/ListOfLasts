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
		<input type="text" action="aftermath.php" name="name" placeholder="Analysse? Edgar? Ned?">

		<h4>What are your pronouns?</h4>

		<label>
		<input type="radio" name="gender" value="they">
		They/Them/Theirs</label>
		<br>
		<label>
		<input type="radio" name="gender" value="she">
		She/Her/Hers</label>
		<br>
		<label>
		<input type="radio" name="gender" value="he">
		He/Him/His</label>
		<br>

		<h4>How old are you?</h4>
		<input type="text" action="survey.php" name="age" placeholder="Don't be shy.">

		<h4>What's your occupation?</h4>
		<input type="text" action="survey.php" name="occupation" placeholder="e.g. Student, Artist">

		<h4>Favorite color?</h4>
		<label>
		<input type="radio" name="faveColor" value="Blue">
		Blue</label>
		<br>
		<input type="radio" name="faveColor" value="Red">
		<label>
		Red</label>
		<br>
		<label>
		<input type="radio" name="faveColor" value="Yellow">
		Yellow</label>
		<br>
		<label>
		<input type="radio" name="faveColor" value="Green">
		Green</label>
		<br>
		<label>
		<input type="radio" name="faveColor" value="Purple">
		Purple</label>
		<br>
		<label>
		<input type="radio" name="faveColor" value="Orange">
		Orange</label>
		<br>
		<label>
		<input type="radio" name="faveColor" value="Black">
		Black</label>
		<br>
		<label>
		<input type="radio" name="faveColor" value="White">
		White</label>
		<br>
		<label>
		<input type="radio" name="faveColor" value="Other">
		Other</label>
		<br>

		<h4>What's your favorite kind of music?</h4>
		<input type="text" action="survey.php" name="faveMusic" placeholder="Except Rap and Country (just kidding).">

		<h4>Where's your favorite place to go?</h4>
		<input type="text" action="survey.php" name="favePlace" placeholder="e.g. Say Sí">

		<h4>Your favorite season?</h4>
		<label>
		<input type="radio" name="season" value="Spring">
		Spring</label>
		<br>
		<input type="radio" name="season" value="Summer">
		<label>
		Summer</label>
		<br>
		<label>
		<input type="radio" name="season" value="Autumn">
		Autumn</label>
		<br>
		<label>
		<input type="radio" name="season" value="Winter">
		Winter</label>
		<br>




		<!-- START BINARY QUESTIONS -->




		<h6>For the next part: You'll be choosing between several options that are presented to you. Select the one that describes you the best.</h6>

		<h4>I am.....</h4>
		<br>

		<label>
	    <input type="radio" name="sharpCasual" id="sharp" value="1">
	    Sharp<br>
		</label>
	    or<br>
	    <label>
	    <input type="radio" name="sharpCasual" id="casual" value="2">
	    Casual<br>
		</label>

		<br>
		<label>
	    <input type="radio" name="clumsyGraceful" id="clumsy" value="1">
	    Clumsy<br>
		</label>
	    or<br>
	    <label>
	    <input type="radio" name="clumsyGraceful" id="graceful" value="2">
	    Graceful<br>
		</label>
		<br>


		<label>
	    <input type="radio" name="shyConfident" id="shy" value="1">
	    Shy<br>
		</label>
	    or<br>
	    <label>
	    <input type="radio" name="shyConfident" id="confident" value="2">
	    Confident<br>
		</label>
		<br>
		

		<label>
	    <input type="radio" name="mellowIntense" id="mellow" value="1">
	    Mellow<br>
		</label>
	    or<br>
	    <label>
	    <input type="radio" name="mellowIntense" id="intense" value="2">
	    Intense<br>
		</label>
		<br>


		<label>
	    <input type="radio" name="organizedMessy" id="organized" value="1">
	    Organized<br>
		</label>
	    or<br>
	    <label>
	    <input type="radio" name="organizedMessy" id="messy" value="2">
	    Messy<br>
		</label>
		<br>


		<label>
	    <input type="radio" name="aggressiveDocile" id="aggressive" value="1">
	    Aggressive<br>
		</label>
	    or<br>
	    <label>
	    <input type="radio" name="aggressiveDocile" id="docile" value="2">
	    Docile<br>
		</label>
		<br>



		<label>
	    <input type="radio" name="adventurousCautious" id="adventurous" value="1">
	    Adventurous<br>
		</label>
	    or<br>
	    <label>
	    <input type="radio" name="adventurousCautious" id="cautious" value="2">
	    Cautious<br>
		</label>
		<br>


		<label>
	    <input type="radio" name="strongWeak" id="strong" value="1">
	    Strong<br>
		</label>
	    or<br>
	    <label>
	    <input type="radio" name="strongWeak" id="weakB" value="2">
	    Weak<br>
		</label>



		<!-- END BINARY QUESTIONS -->



	    <h4>What was the last thing you ate?</h4>
		<input type="text" action="aftermath.php" name="lastAte" placeholder="e.g. Barbacoa & Big Red">

		
		<h4>Which do you value more?</h4>
		<label>
		<input type="radio" name="valued" id="family" value="family">
		Friends<br>
		</label>
	    or<br>
	    <label>
	    <input type="radio" name="valued" id="friend" value=friend>
	    Family<br>
		</label>

		<h4>Where were you before here?</h4>
		<input type="text" action="aftermath.php" name="beforeHere" placeholder="School? Home? Work?">

		<h4>What was the last person you spoke with?</h4>

		<label>
		<input type="radio" name="lastspoke" id="friend" value="friend">
		Friend
		</label>
		<br>
		<label>
		<input type="radio" name="lastspoke" id="family" value="family">
		Family
		</label>
		<br>
		<label>
		<input type="radio" name="lastspoke" id="sigother" value="sigother">
		Significant Other<br>
		</label>
		<label>
		<input type="radio" name="lastspoke" id="stranger" value="stranger">
		Stranger<br>
<label>

		</label>
</label>

		<h6>Try to put some thought into these next questions:</h6>

		<h4>What is your proudest accomplisment?</h4>
		<input type="text" action="aftermath.php" name="proudest" placeholder="It could be anything!">

		<h4>What was dark time in your life?</h4>
		<input type="text" action="aftermath.php" name="dark" placeholder="When was a time you felt low/unsure of yourself?">

		<h4>If your friends and family were to do an activity to remember you by— what would you want that activity to be?</h4>
		<input type="text" action="aftermath.php" name="celebrated" placeholder="Dinner? Drinking? Singing?">

		<h4>Who was the last person that told you they loved you?</h4>
		<input type="text" action="aftermath.php" name="loveme" placeholder="Parent? Loved one? Sibling?">

		<h4>Who was the last person that you told you loved?</h4>
		<input type="text" action="aftermath.php" name="loveyou" placeholder="Parent? Loved one? Sibling?">


		<h4>If you could see anybody one last time, who?</h4>
		<label>
		<input type="radio" name="lastseen" id="sigother" value="sigother">
		Significant Other<br>
		</label>
		<label>
		<input type="radio" name="lastseen" id="child" value="child">
		Child<br>
		</label>
		<label>
		<input type="radio" name="lastseen" id="parent" value="parent">
		Parent/Guardian<br>
		</label>
		<label>
		<input type="radio" name="lastseen" id="sibling" value="sibling">
		Sibling<br>
		</label>
		<label>
		<input type="radio" name="lastseen" id="grandparent" value="grandparent">
		Grandparent<br>
		</label>
		<label>
		<input type="radio" name="lastseen" id="relative" value="relative">
		Other Relative<br>
		</label>
		<label>
		<input type="radio" name="lastseen" id="friend" value="friend">
		Friend<br>
		</label>
		<input type="text" action="aftermath.php" name="lastseen" placeholder="Other">

		<h4>Are you content?</h4>
		<label>
		<input type="radio" name="content" value="yes">
		Yes
		</label>
		<br>
	    <label>
	    <input type="radio" name="content" value="no">
	    No
		</label>
	    <br>

		<input type="submit">
	</form>
	</div>

</body>
</html>