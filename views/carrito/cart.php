<?php

    include_once '../../models/config.php';
    
    session_start();
    
    if(isset($_SESSION['carrito'])){
        if(isset($_POST)){
            $arreglo = $_SESSION['carrito'];
            $encontro = false;
            $numero = 0;
            for($i=0; $i < count($arreglo); $i++){
                if($arreglo[$i]['id_producto'] == $_POST['id_producto']){
                    $encontro = true;
                    $numero = $i;
                }
            }
            if($encontro == true){
                $arreglo[$numero]['cantidad'] = $arreglo[$numero]['cantidad'] + $_POST['cantidad'];
                $_SESSION['carrito'] = $arreglo;
            }else{
                $arregloNuevo = array(
                'id_producto' => $_POST['id_producto'],
                'codigo' => $_POST['codigo'],
                'product_name' => $_POST['product_name'],
                'tipo_producto' => $_POST['tipo_producto'],
                'product_price' => $_POST['product_price'],
                'puntos' => $_POST['puntos'],
                'lote' => $_POST['lote'],
                'cantidad' => $_POST['cantidad']
            );
            array_push($arreglo, $arregloNuevo);
            $_SESSION['carrito'] = $arreglo;
            }
            
            header("location: $project_index/cliente.php?option=productos-carrito&add=Produto Adicionado");
        }else{header("location: $project_index/cliente.php?option=productos-carrito");}
    }else{
        if(isset($_POST)){
            
            $arreglo[] = array(
                'id_producto' => $_POST['id_producto'],
                'codigo' => $_POST['codigo'],
                'product_name' => $_POST['product_name'],
                'tipo_producto' => $_POST['tipo_producto'],
                'product_price' => $_POST['product_price'],
                'puntos' => $_POST['puntos'],
                'lote' => $_POST['lote'],
                'cantidad' => $_POST['cantidad']
            );
            $_SESSION['carrito'] = $arreglo;
            header("location: $project_index/cliente.php?option=productos-carrito&add=Produto Adicionado");
        }
        header("location: $project_index/cliente.php?option=productos-carrito&add=Produto Adicionado");
    }
?>


<?php
	
	#include_once '../../models/config.php';

	#session_start();

	# Guardando os dados do Carrinho na sessão do Carro
	#$_SESSION['carrito'][] = $_POST;

	#header("location: $project_index/cliente.php?option=productos-carrito&add=Produto Adicionado");	
	/*

	if( !isset($_SESSION["cart"]) ){
		$_SESSION["cart"] = [];
	}else{
		foreach($_SESSION["cart"] as $id => $data){
			# comtabilizando o total do carrinho
			# em toda requisição
			$actual_qtd += $data["quantity"];
		}
	}


	/*
	# validação de perssistencia
	# e montante
	$actual_qtd = 0;
	if( !isset($_SESSION["cart"]) ){
		$_SESSION["cart"] = [];
	}else{
		foreach($_SESSION["cart"] as $id => $data){
			# comtabilizando o total do carrinho
			# em toda requisição
			$actual_qtd += $data["quantity"];
		}
	}

	# controle de açoes
	if( isset($_REQUEST["action"]) and !empty($_REQUEST["action"]) ){
		switch($_REQUEST["action"]){
			case "add":
				# add novo produto / contabilizar
				if( isset($_SESSION["cart"][$_REQUEST["id"]]) ){
					$_SESSION["cart"][$_REQUEST["id"]]["quantity"]++;
					echo json_encode([
						'error' => false,
						'message' => 'Mas una unidad agregada al carrito',
						"actual_qtd" => $actual_qtd
 					]);
				}else{
					$_SESSION["cart"][$_REQUEST["id"]]["quantity"] = 1;
					echo json_encode([
						"error" => false,
						"message" => "Producto agregado al carrito",
						"actual_qtd" => $actual_qtd
 					]);
				}
			break;

			case "clear":
				
			break;
		}
	}
?>