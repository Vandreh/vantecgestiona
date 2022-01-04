<?php  
	
	/*# Erros
	ini_set("display_errors", 1);

	# Váriaveis de controle
	$host = "localhost";
	$user = "vandreh";
	$password = "321654987";
	$database = "vantecge_db_consultaspower";

	# Função de conexão
	$conn = mysqli_connect($host,$user,$password,$database) or die(mysqli_connect_error());
	*/

	try {
		$myPDO = new PDO("psql:host:localhost; dbname=vantecge_db_consultaspower.sql", "postgres", "321654987");
		echo "Connected to PostgreSQL with PDO";
	} catch (PDOException $e){
		echo $e->getMessage();
	}
	
?>