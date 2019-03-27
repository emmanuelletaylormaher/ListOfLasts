<?

require 'rb-mysql.php';
R::setup('mysql:host=localhost;
	dbname=inventory', 'root', 'root');


R::freeze( FALSE ); //until production