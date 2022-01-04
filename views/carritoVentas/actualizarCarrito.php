<?php
    session_start();
    $arreglo = $_SESSION['carrito'];
    for($i=0; $i < count($arreglo); $i++){
        if($arreglo[$i]['id_producto'] == $_POST['id']){
            $arreglo[$i]['cantidad'] = $_POST['cantidad'];
            $_SESSION['carrito'] = $arreglo;
            break;
        }
    }
    
?>