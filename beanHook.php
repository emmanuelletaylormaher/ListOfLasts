<?

require 'rb-mysql.php';
R::setup('mysql:host=localhost;port=8889;
	dbname=ListOfLasts', 'test', 'root');


R::freeze( FALSE ); //until production