<?php
    session_start();
    $arreglo = $_SESSION['carritoVenta'];
    for($i=0; $i < count($arreglo); $i++){
        if($arreglo[$i]['id_estoque'] != $_POST['id']){
            $arregloNuevo[] = array(
                'id_estoque' => $arreglo[$i]['id_estoque'],
                'id_compra' => $arreglo[$i]['id_compra'],
                'id_producto' => $arreglo[$i]['id_producto'],
                
                'fecha_compra' => $arreglo[$i]['fecha_compra'],
                'vencimiento' => $arreglo[$i]['vencimiento'],
                'puntos' => $arreglo[$i]['puntos'],
                'estoque_created_in' => $arreglo[$i]['estoque_created_in'],
                'user_cpf' => $arreglo[$i]['user_cpf'],
                
                'codigo' => $arreglo[$i]['codigo'],
                'producto' => $arreglo[$i]['producto'],
                'tipo_producto' => $arreglo[$i]['tipo_producto'],
                'precio' => $arreglo[$i]['precio'],
                'precio_venta' => $arreglo[$i]['precio_venta'],
                'lote' => $arreglo[$i]['lote']
            );
        }
    }
    if(isset($arregloNuevo)){
        $_SESSION['carritoVenta'] = $arregloNuevo;
    }else{
        //quiere decir que el registro a eliminar es el unico que habia
        unset($_SESSION['carritoVenta']);
    }
    echo "Producto eliminado";
?>