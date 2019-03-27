<?

//PROGRAM PURPOSE: 
	// Different Test Statements Regarding the Various Radio Button
	// Choices That the Actor must answer. Will help mitigate some of the
	// processing on redbean

//SEASON
switch(season)
{
	case 1 :
		echo "SPRING";
		break;
	case 2 :
		echo "SUMMER";
		break;
	case 3 :
		echo "AUTUMN";
		break;
	case 4:
		echo "WINTER";
		break;
}

//Choice 1 —— Sharp or Casual
if (choice1 == 1)
{
	echo "sharp.";
}
else
{
	echo "casual."
}

//Choice 2 —— Clumsy or Graceful
if(choice2 == 1)
{
	echo "clumsy.";
}
else
{
	echo "graceful.";
}

//Choice 3 —— Aggressive or Docile
if(choice3 == 1)
{
	echo "aggressive.";
}
else
{
	echo "docile.";
}

//Choice 4 —— Shy or Confident
if (choice4 == 1)
{
	echo "shy.";
}
else
{
	echo "confident.";
}

//Choice 5 —— Strong or Weak
if (choice5 == 1)
{
	echo "strong.";
}
else
{
	echo "weak.";
}

//Choice 6 —— Mellow or Intense
if(choice6 == 1)
{
	echo "mellow.";
}
else
{
	echo "intense";
}


//Choice 7 —— Friends or Family
if(choice7 == 1)
{
	echo "friends.";
}
else
{
	echo "family.";
}

//Last Spoke With
switch(lastSpoke)
{
	case "friend":
		echo "friend";
		break;
	case "family":
		echo "family";
		break;
	case "significant":
		echo "significant other";
		break;
	case "stranger":
		echo "stranger";
		break;
	default:
		echo "unknown";
		break;
}

//Last Person You'd Like To See
switch(lastPerson)
{
	case "mother":
		break;
	case "father":
		break;
	case "sibling":
		break;
	case "grandparent":
		break;
	case "cousin":
		break;
	case "child":
		break;
	case "friend":
		break;
	default:
		break;
}

//Content?
