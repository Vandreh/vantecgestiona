<?php
    session_start();
    $arreglo = $_SESSION['carrito'];
    for($i=0; $i < count($arreglo); $i++){
        if($arreglo[$i]['id_producto'] != $_POST['id']){
            $arregloNuevo[] = array(
                'id_producto' => $arreglo[$i]['id_producto'],
                'codigo' => $arreglo[$i]['codigo'],
                'product_name' => $arreglo[$i]['product_name'],
                'tipo_producto' => $arreglo[$i]['tipo_producto'],
                'product_price' => $arreglo[$i]['product_price'],
                'puntos' => $arreglo[$i]['puntos'],
                'lote' => $arreglo[$i]['lote'],
                'cantidad' => $arreglo[$i]['cantidad']
            );
            
        }
    }
    if(isset($arregloNuevo)){
        $_SESSION['carrito'] = $arregloNuevo;
    }else{
        //quiere decir que el registro a eliminar es el unico que habia
        unset($_SESSION['carrito']);
    }
    echo "Producto eliminado";
?>