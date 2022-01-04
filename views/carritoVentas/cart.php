<?php

    include_once '../../models/config.php';
    
    session_start();
    
    if(isset($_SESSION['carritoVenta'])){
        if(isset($_POST)){
            $arreglo = $_SESSION['carritoVenta'];
            $encontro = false;
            $numero = 0;
            for($i=0; $i < count($arreglo); $i++){
                if($arreglo[$i]['id_estoque'] == $_POST['id_estoque']){
                    $encontro = true;
                    $numero = $i;
                }
            }
            if($encontro == true){
            }else{
                $arregloNuevo = array(
                'id_estoque' => $_POST['id_estoque'],
                'id_compra' => $_POST['id_compra'],
                'id_producto' => $_POST['id_producto'],
                
                'fecha_compra' => $_POST['fecha_compra'],
                'vencimiento' => $_POST['vencimiento'],
                'puntos' => $_POST['puntos'],
                'estoque_created_in' => $_POST['estoque_created_in'],
                'user_cpf' => $_POST['user_cpf'],
                
                'codigo' => $_POST['codigo'],
                'producto' => $_POST['producto'],
                'tipo_producto' => $_POST['tipo_producto'],
                'precio' => $_POST['precio'],
                'precio_venta' => $_POST['precio_venta'],
                'lote' => $_POST['lote']
            );
            array_push($arreglo, $arregloNuevo);
            $_SESSION['carritoVenta'] = $arreglo;
            }
            
            header("location: $project_index/cliente.php?option=productos-venta&add=Produto Adicionado");
        }else{header("location: $project_index/cliente.php?option=productos-venta");}
    }else{
        if(isset($_POST)){
            
            $arreglo[] = array(
                'id_estoque' => $_POST['id_estoque'],
                'id_compra' => $_POST['id_compra'],
                'id_producto' => $_POST['id_producto'],
                
                'fecha_compra' => $_POST['fecha_compra'],
                'vencimiento' => $_POST['vencimiento'],
                'puntos' => $_POST['puntos'],
                'estoque_created_in' => $_POST['estoque_created_in'],
                'user_cpf' => $_POST['user_cpf'],
                
                'codigo' => $_POST['codigo'],
                'producto' => $_POST['producto'],
                'tipo_producto' => $_POST['tipo_producto'],
                'precio' => $_POST['precio'],
                'precio_venta' => $_POST['precio_venta'],
                'lote' => $_POST['lote']
            );
            $_SESSION['carritoVenta'] = $arreglo;
            header("location: $project_index/cliente.php?option=productos-venta&add=Produto Adicionado");
        }
        header("location: $project_index/cliente.php?option=productos-venta&add=Produto Adicionado");
    }
?>