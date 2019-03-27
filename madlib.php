<?php




function intro(string $name, string $gender)
{
	$time = array("last week",
 			"just days ago",
			"last month",
			"recently",
			"this morning",
			"last night");
	$rando = $time[array_rand($time)];

	$wereOrWas = pronounGrammar($gender);

	//The first part of the sentence will remain the same, but the last half will be random.
	$firstHalf = "Our friend ".$name." passed away ".$rando." and ";

	$lastHalf = array("we miss ".himHisHerHers($gender, 1). " terribly. ",
				$gender." ".$wereOrWas." taken from us far too soon. ",
				" we wish we had more time with ".himHisHerHers($gender, 1).". ");
	$lastRando = $lastHalf[array_rand($lastHalf)];

	return $firstHalf.$lastRando;
}

function first(string $name, string $gender, string $ans)
{
	$wereOrWas = pronounGrammar($gender);
	$lovedOne = array("close friend",
				"child",
				"parent",
				"sibling",
				"spouse",
				"partner");
	$rando = $lovedOne[array_rand($lovedOne)];

	$rand = rand(1,2);

	if($rand == 1)
	{
		return "Because I was ".himHisHerHers($gender, 2)." ".$rando.", ".$gender." told me that the darkest time in ".himHisHerHers($gender, 2)." life was, ".$gender." said '".$ans."'. I did my best to comfort ".himHisHerHers($gender, 1)." through this, and I think ".$gender." came out on the other side changed forever. ";
	}
	else
	{
		return $name." was my ".$rando.".  One of the darkest times ".$gender." ever went through was, according to ".himHisHerHers($gender, 1)." quote, '".$ans."'. ".$gender." ".$wereOrWas." never the same after that, but I'd like to think that ".$gender." realizd that it was just a step on ".himHisHerHers($gender, 2)." path. ";
	}
}

function second(string $name, string $gender, string $ans)
{
	$wereOrWas = pronounGrammar($gender);

	$rand = rand(1,2);

	if($rand == 1)
	{
		return $name."'s accomplishments were many, and we were always proud of ".himHisHerHers($gender, 1).", but ".$name." told me that ".himHisHerHers($gender, 2)." proudest moment was quote, '".$ans."'. I don't think any of is surprised that ".$name." chose this above all else——for it clearly was an event that shaped ".himHisHerHers($gender, 1)." life so much. ";
	}
	else
	{
		return "I doubt that any of you will be surprised to hear that ".$name."'s proudest moment was, quote, '".$ans."'. It took hard work and perserverance to occur, but those were qualities that ".$gender." had in abundance. ";
	}
}

function third(string $name, string $gender, string $ans)
{
	$wereOrWas = pronounGrammar($gender);


	return "A long time ago, I asked ".$name." how ".$gender." would like to be remembered if ".$gender." were to die. ".$name." said that ".$gender." would like ".himHisHerHers($gender, 2)." friends and family to '".$ans."'. I can't think of a better way to celebrate ".himHisHerHers($gender, 2)." life. ";

}

function outro(string $name, string $gender)
{
	$wereOrWas = pronounGrammar($gender);

	$rand = rand(1,2);

		if($rand == 1)
	{
		return "Thank you all for being here to remember ".$name." with us. Even though ".$name." isn't here, I'm sure ".$gender." would be glad to see all of your faces here. Thank you.";
	}
	else
	{
		return "Thank you all for remembering ".$name." with us. Not all of us got a chance to say goodbye, but I hop that today gives you all the chance to do so. Thank you.";
	}
}

function everything(string $name, string $gender, string $ans1, string $ans2, string $ans3)
{
	echo intro($name, $gender);
	echo "<br><br>";
	echo first($name, $gender, $ans1);
	echo "<br><br>";
	echo second($name, $gender, $ans2);
	echo "<br><br>";
	echo third($name, $gender, $ans3);
	echo "<br><br>";
	echo outro($name, $gender);
}