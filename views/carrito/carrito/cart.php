<?php

    include_once '../../models/config.php';
?>


<div class="site-wrap">
    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                <form class="col-md-12" method="post">
                    <div class="site-blocks-table">
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th class="product-thumbnail">Producto</th>
                                <th class="product-name">Código</th>
                                <th class="product-price">Precio</th>
                                <th class="product-quantity">Cantidad</th>
                                <th class="product-total">Total</th>
                                <th class="product-remove">Remove</th>
                              </tr>
                            </thead>
                            <tbody>
                                
                              <?php
                                $total = 0;
                                if(isset($_SESSION['carrito'])){
                                    $arregloCarrito = $_SESSION['carrito'];
                                    for($i=0; $i < count($arregloCarrito); $i++){
                                        $total = $total + ($arregloCarrito[$i]['product_price'] * $arregloCarrito[$i]['cantidad']);
                              ?>
                                
                                <tr>
                                    <td class="product-name">
                                        <h2 class="h5 text-black"><?php echo $arregloCarrito[$i]['product_name']; ?></h2>
                                    </td>
                                    <td class="product-name">
                                        <h2 class="h5 text-black"><?php echo $arregloCarrito[$i]['codigo']; ?></h2>
                                    </td>
                                    <td>$<?php echo $arregloCarrito[$i]['product_price']; ?></td>
                                    <td>
                                        <div class="input-group mb-3" style="max-width: 120px;">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-outline-primary js-btn-minus btnIncrementar" type="button">&minus;</button>
                                            </div>
                                            <input type="text" class="form-control text-center txtCantidad"
                                                data-id="<?php echo $arregloCarrito[$i]['id_producto']; ?>"
                                                data-precio="<?php echo $arregloCarrito[$i]['product_price']; ?>"
                                                value="<?php echo $arregloCarrito[$i]['cantidad']; ?>"
                                                placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-primary js-btn-plus btnIncrementar" type="button">&plus;</button>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cant<?php echo $arregloCarrito[$i]['id_producto']; ?>">
                                        
                                        $<?php
                                        $suma = $arregloCarrito[$i]['product_price'] * $arregloCarrito[$i]['cantidad'];
                                        echo number_format($suma, 2, '.', '') ; ?></td>
                                    <td><a href="#" class="btn btn-primary btn-sm btnEliminar" data-id="<?php echo $arregloCarrito[$i]['id_producto']; ?>">X</a></td>
                                </tr>
                              
                              <?php } } ?>
                              
                            </tbody>
                        </table>
                    </div>
              </form>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="row mb-5">
                        <div class="col-md-6">
                            <a href="javascript:history.back(1)" class="btn btn-outline-primary btn-sm btn-block">Continuar Comprando</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 pl-5">
                    <div class="row justify-content-end">
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-12 text-right border-bottom mb-5">
                                    <h3 class="text-black h4 text-uppercase">Subtotal</h3>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <span class="text-black">Subtotal</span>
                                </div>
                                <div class="col-md-6 text-right">
                                    <strong class="text-black">$<?php echo number_format($total, 2, '.', '');?></strong>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <a class="btn btn-primary btn-lg py-3 btn-block" href="?option=checkout">Proceder la Compra</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>