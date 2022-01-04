<?php

	# Incluindo os arquivos necessários
	include_once dirname(__DIR__)."/models/config.php";
	include_once $project_path."/models/connect.php";
	include_once $project_path."/models/managercompras.php";

	# Validando a sessão
	session_start();
	
	if(!isset($_SESSION[md5("user_data")])){
		header("location: $project_index?error=access_denied");
		session_destroy();
	}
	
	$user = $_SESSION[md5("user_data")];
	
	# Testando se é realmente um ADMIN 
	if($user['profile_page'] != "admin.php" || $user['profile_page'] != "cliente.php"){
		header("location: $project_index?error=access_denied");
	}
    
    if(isset($_SESSION['carrito'])){
        if(isset($_POST)){
            $data[] = $_POST;
            $data[] = $_SESSION['carrito'];
            
            # Gravando os dados no banco
            insert("estoque", $data);
            
            
            unset($_SESSION['carrito']);
            # Redirecionamento
            header("location: $project_index/".$user['profile_page']."?option=thankyou&success=insert_ok");
        }
    }
?>