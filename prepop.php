<?php

//prepopulated string array
$prepop = array("SWCl5mPBJR",
				"Vil0atLoa2",
				"rsjGA9K63F",
				"haoUei9d3Y",
				"IBdyYJIq7v",
				"gnV3MGjRPN",
				"JTPB3BHt3l",
				"zxGS3GEEWG",
				"OHx9EhBP8C",
				"OQgsycOXL4",
				"GuTQnY3XZL",
				"VosSisghr9",
				"4M1kzw9Jjk",
				"KMEe28wMvU",
				"yNrfJi9IlS",
				"05sW4TkQEf",
				"bbvYT0mMXB",
				"SZzbZLWFi6",
				"52Krr0H7wS",
				"WVK2ME0eam",
				"xpwMGObqTv",
				"IhsdxLAFnZ",
				"9viXAantCv",
				"4Bm5XKp3Ub",
				"REsLbYH1af",
				"OAFjR7fqfO",
				"E6MJqLdzDw",
				"J2Y2gjYD0H",
				"XZ1tHn0iY0",
				"DaHEfzIolC",
				"3gdF7YnTHX",
				"4VTB9Ch6wL",
				"FXVrsPSPwU",
				"Pv6ui5YDeV",
				"QGqaam1DYc",
				"CXmJnF3cZN",
				"fR0OBzccM7",
				"iLFLyX6mpw",
				"sUGBTPqdFX",
				"OCXkR4BfEY");
$prepop_rand = array_rand($prepop);


//Helps determine grammar based on pronoun of person
function pronounGrammar(string $gender="they")
{
	$wereOrWas = "was";
	//Check for pronoun for grammatical reasons
	if (strcmp($gender, "they") == 0)
		$wereOrWas = "were";

	return $wereOrWas;
}

//More grammar helper functions
function himHisHerHers(string $gender="they", int $code)
{
	//$code = 1 ——> him or her
	if($code == 1)
	{
		if(strcmp($gender, "he") == 0)
			return "him";
		else if(strcmp($gender, "she") == 0)
			return "her";
		else if(strcmp ($gender, "they") == 0)
			return "them";
	} else if ($code == 2) //$code = 2 -—— his or hers
	{
		if (strcmp($gender, "he") == 0)
			return "his";
		else if (strcmp($gender, "she") == 0)
			return "her";
		else if (strcmp($gender, "they") == 0)
			return "their";
	}

}


function shyConfident(int $ans=1, string $name, string $gender)
{
	$wereOrWas = pronounGrammar($gender);

	//"Shy" sentences in an array
	$shy = array($name." was known to not really engage in social gatherings. ",
				$name."'s timidness was unmatched. ",
				$name."'s docile demeanor meant that they often strayed from fights or any sort of confrontation. ",
				"Despite keeping quiet in group settings, ".$name."'s personality was a real treat to behold if ever met with individually. ",
				$name." connected more with animals than people at parties. ");

	//"Confident" sentences in an array
	$confident = array($gender. " ".$wereOrWas." willing to take risks that most people wouldn't dare. ",
						$gender. " ".$wereOrWas." a daring person, taking on every challenge thrown at ".himHisHerHers($gender, 1). ". ",
						 $gender." ".$wereOrWas." quite confident——oftentimes captivating everyone within in any given situation. ",
						 "No thing, concept, nor person stood in ".himHisHerHers($gender, 2). " way. ",
						 "The things and people that interested ".himHisHerHers($gender, 1)." the most were the ones who could provide a challenge. ");

		//shy= 1, confident = 2
	if($ans == 1) //returns random string from $shy
		return $shy[array_rand($shy)];
	else //Returns a random string from $confident
		return $confident[array_rand($confident)];

}

function clumsyGraceful(int $ans=1, string $name, string $gender)
{
	$wereOrWas = pronounGrammar($gender);

	$clumsy = array($name." wasn't the most agile, but still got the job done.",
					$name. " was somewhat awkward, but was beloved by those who knew ".himHisHerHers($gender, 1). ". ",
					$name."'s loved ones always knew to keep ".himHisHerHers($gender, 1)." out of danger's way. ".$gender." ".$wereOrWas." accident-prone.",
					$name." was very self-aware in the sense that ".$gender." refrained from participating in activities that required presicion. ".$gender." ".$wereOrWas." always sure to help more than hurt. ",
					$name." was quite clumsy. However—— ".$gender." knew how to clean up after any mess ".$gender." made. "
					);

	$graceful = array($name."'s charm was unlike anyone else's. ",
					$name."'s personality was always noted as lovely by others. ",
					$name. " saw the beauty in others——and others saw the beauty in ".himHisHerHers($gender, 1). " . ",
					$gender." ".$wereOrWas." very deliberate in everything ".$gender." did—— ".himHisHerHers($gender, 1)." existence was comparable to something that was beautifully choreographed. ",
					$gender." ".$wereOrWas." always aware of everything that surrounded ".himHisHerHers($gender, 1)."——and worked that to ".himHisHerHers($gender, 2)." benefit. ");

		//clumsy= 1, graceful = 2
	if($ans == 1) //returns random string from $clumsy
		return $clumsy[array_rand($clumsy)];
	else//Returns a random string from $graceful
		return $graceful[array_rand($graceful)];
}

function mellowIntense(int $ans=1, string $name, string $gender)
{
	$wereOrWas = pronounGrammar($gender);

	$mellow = array($name. "'s lax nature made ".himHisHerHers($gender, 1)." very approachable. ",
					"Others oftentimes found ".$name." to be quite sweet. ",
					$name." was an excellent conversationalist. ".$gender. " was willing to talk about anything that came to mind. ",
					$gender." was never the judgmental type. If you wanted someone's support: you'd go to ".himHisHerHers($gender, 1).". ",
					 "Things never bothered ".himHisHerHers($gender, 1). "; it was difficult for anything to get under ".$name."'s skin. ",
					"Stress was a nonexistent concept to ".$name.". ");

	$intense = array($name." was very impassioned. ",
					$name." was often perceived as 'rough around the edges'. However—after getting to know ".himHisHerHers($gender, 1).", others would realize that".himHisHerHers($gender, 2)."  brazenness was a symptom of extreme passion. ",
					$name." was incredibly keen. ".$gender." ".$wereOrWas. " always aware of what was going on around ".himHisHerHers($gender, 1).". ",
					"Despite ".$name."'s attemps to keep it under wraps, ".himHisHerHers($gender, 2)." fierceness was always palpable.",
					$gender." was quite fiery."
					);

		//mellow= 1, intense = 2
	if($ans == 1) //returns random string from $mellow
		return $mellow[array_rand($mellow)];
	else //Returns a random string from $intense
		return $intense[array_rand($intense)];
}



function organizedMessy(int $ans=1, string $name, string $gender)
{
	$wereOrWas = pronounGrammar($gender);

	//"Oraganized" sentences in array
	$org = array($name." was a goal-oriented person and always on task. ",
				"Throughout ".$name."'s life——order was always maintained. ",
				$name." was a very coordinated person; ".$gender." ".$wereOrWas." always planning ahead. ",
				$name." was definitely the orderly type. Such was reflected in everything ".$gender." did. ",
				$gender." ".$wereOrWas." always orderly. ");

	$messy = array("The organization or details of things didn't matter much to ".$name.". ".$gender." ".$wereOrWas." more of a 'Big Picture' person.",
					$gender." lived in organized chaos. ",
					$name." cared only for the things that ".$gender." deemed the most important.",
					$name." didn't place much importance in material things. ",
					$name." was never thought of as 'materialistic' by ".himHisHerHers($gender, 2)." loved ones. "
					);

	//Organized = 1, Messy = 2
	if($ans == 2)
		return $messy[array_rand($messy)];
	else //Returns a random string from $org
		return $org[array_rand($org)];
}

function adventurousCautious(int $ans=1, string $name, string $gender)
{
	$wereOrWas = pronounGrammar($gender);

	$adventurous = array($name." would often jump into situations headfirst, throwing caution to the wind. ",
						$name." was incredibly dynamic. ".$gender." could never stay in one place for a long time. ",
						$gender." loved the outdoors and nature. ",
						$gender." longed for the adventure and thrill that the Great Unknown had to offer.",
						"Unlike others, the prospect of change was never a terrifying concept to ".$gender.". In fact, ".$gender." welcomed it. "
						);

	$cautious = array($gender." ".$wereOrWas." was never impulsive in the actions ".$gender." took. ",
					$name." considered every possible outcome whenever making a decision. ",
					$name." was incredibly methodical in everything ".$gender." did. ".$gender." never left any loose ends. ",
					$gender." made sure that ".$gender." ".$wereOrWas." always in a controlled environment. ",
					$name." was very good at staying out of trouble. "
					);

	//adventurous= 1, cautious = 2
	if($ans == 1) //returns random string from $adventurous
		return $adventurous[array_rand($adventurous)];
	else //Returns a random string from $cautious
		return $cautious[array_rand($cautious)];
}

function aggressiveDocile(int $ans=1, string $name, string $gender)
{
	$wereOrWas = pronounGrammar($gender);

	$aggressive = array($name." was very confrontational. ".$gender." always got to the bottom of things. ",
						$name."'s assertion was so strong that ".$gender." ".$wereOrWas." very good at getting what ".$gender." wanted. ",
						himHisHerHers($gender, 2)." energy was fiery and it showed in everything ".$gender." did. ",
						$name."'s competitive nature meant that ".$gender." won awards in almost every contest ".$gender." entered. ",
						$name." pursued ".himHisHerHers($gender, 2)." interests diligently and without shame.");

	$docile = array($name." never contested others' decisions; ".$gender." ".$wereOrWas." not the picky type.",
					$name." was easy to persuade; ".$gender." would be down to do almost anything.",
					"Friends viewed ".himHisHerHers($gender, 1)." as gentle in nature and easy to get along with.",
					$name." was a team player. Collaboration was one of ".himHisHerHers($gender, 2)." greatest strengths. ",
					"Differences and preferences were never viewed as an inconvenience to ".himHisHerHers($gender, 1).". ".$gender." ".$wereOrWas." very accomodating.");

	//aggressive= 1, docile = 2
	if($ans == 1) //returns random string from $adventurous
		return $aggressive[array_rand($aggressive)];
	else//Returns a random string from $cautious
		return $docile[array_rand($docile)];
}

function strongWeak(int $ans=1, string $name, string $gender)
{
	$wereOrWas = pronounGrammar($gender);

	$strong = array(himHisHerHers($gender, 2)." confidence always inspired others to reach their goals. ",
					$gender." ".$wereOrWas." viewed as the cornerstone of".himHisHerHers($gender, 2)." family and friend group.",
					"To ".himHisHerHers($gender, 1).", there was no such thing as there being 'too much on ".himHisHerHers($gender, 2)." plate'. ");

	$weak = array($gender." ".$wereOrWas." surrounded by loved ones who always helped ".himHisHerHers($gender, 1)." throughout any endeavor. ",
					"Although lacking in physical strength, ".himHisHerHers($gender, 2)." heart and mind were stronger than that of everyone who knew ".himHisHerHers($gender, 1).". ");

	//strong = 1, weak = 2
	if($ans == 1) //returns random string from $strong
		return $strong[array_rand($strong)];
	else //Returns a random string from $weak
		return $weak[array_rand($weak)];
}

