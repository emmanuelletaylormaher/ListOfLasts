<?

require 'rb-mysql.php';
R::setup('mysql:host=localhost;
	dbname=ListOfLasts', 'root', 'root');


R::freeze( FALSE ); //until production