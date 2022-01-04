<?php  
    session_start();
	# Incluindo os arquivos necessários
	include_once dirname(__DIR__)."/models/config.php";
	include_once $project_path."/models/connect.php";
	include_once $project_path."/models/managerventas.php";

	# Validando a sessão
	session_start();

	if(!isset($_SESSION[md5("user_data")])){
		header("location: $project_index?error=access_denied");
		session_destroy();
	}

	# Recuperando os dados da sessão
	$user = $_SESSION[md5("user_data")];
	
	# Testando se é realmente um ADMIN 
	if($user['profile_page'] != "cliente.php"){
		header("location: $project_index?error=access_denied");
	}
	
	
	if(isset($_SESSION['carritoVenta'])){
        if(isset($_POST)){
            $data[] = $_POST;
            $data[] = $_SESSION['carritoVenta'];
            
            #var_dump($data);
            # Gravando os dados no banco
            insert("tb_ventas", $data);
            
            unset($_SESSION['carritoVenta']);
            # Redirecionamento
            header("location: $project_index/".$user['profile_page']."?option=thankyouVenta&success=insert_ok");
        }
    }

	

?>