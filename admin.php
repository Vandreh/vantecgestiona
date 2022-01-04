<?php  

	# Incluindo os arquivos necessários
	include_once 'models/config.php';
	include_once 'controllers/validate.php';
	//include_once 'models/helpers.php';

	# Teste de sessão
	session_start();
	if(!isset($_SESSION[md5("user_data")])){
		include_once dirname(__DIR__)."/models/config.php";
    	session_destroy();
    	header("location: $project_index?success=session_ending");
	}

	# Recuperando os dados da sessão
	$user = $_SESSION[md5("user_data")];
	$cpf = $user['user_cpf'];
	
	# Testando se é realmente um ADMIN 
	if($user['profile_page'] != "admin.php"){
		include_once dirname(__DIR__)."/models/config.php";
    	session_destroy();
    	header("location: $project_index?success=session_ending");
    		
	}

	$page_title = $user['user_name'];
	

	function page_content(){
		validate_options();
	}

	# Incluindo o template
	include_once 'views/template.php';

?>