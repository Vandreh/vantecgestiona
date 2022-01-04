<?php

	# Incluindo os arquivos necessários
	include_once dirname(__DIR__)."/models/config.php";
	include_once $project_path."/models/connect.php";
	include_once $project_path."/models/managercompras.php";

	# Validando a sessão
	session_start();
    
    if(isset($_SESSION['carrito'])){
        if(isset($_POST)){
            $arreglo = $_SESSION['carrito'];
            array_push($arreglo, $_POST);
            
            
            # Recebendo os dados do formulário
            $data = $arreglo;
            
            
            
            # Redirecionamento
            var_dump($data);
            
        }}
?>