<?php  

	# Incluindo os arquivos necessários
	include_once dirname(__DIR__)."/models/config.php";
	include_once $project_path."/models/connect.php";
	include_once $project_path."/models/manager.php";

	# Validando a sessão
	session_start();

	if(!isset($_SESSION[md5("user_data")])){
		header("location: $project_index?error=access_denied");
	}

	# Recuperando os dados da sessão
	$user = $_SESSION[md5("user_data")];
	
	# Testando se é realmente um ADMIN 
	if($user['profile_page'] != "admin.php" || $user['profile_page'] != "cliente.php"){
		header("location: $project_index?error=access_denied");
	}

	# Recebendo os dados do formulário
	$data = $_POST;


	//$f['id_user'] = $data['id_user'];

	# Gravando os dados no banco
	update("estoque", $data, array("id_estoque"=>$data['id_estoque']));

	# Redirecionamento
	header("location: $project_index/".$user['profile_page']."?option=stock&success=update_ok");	


?>