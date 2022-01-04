<?php  

	# Incluindo os arquivos necessários
	include_once dirname(__DIR__)."/models/config.php";
	include_once $project_path."/models/connect.php";
	include_once $project_path."/models/managerventas.php";

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
	update("tb_ventas", $data, array("id_venta"=>$data['id_venta']));

	# Redirecionamento
	header("location: $project_index/".$user['profile_page']."?option=cliente2&success=update_ok");	


?>